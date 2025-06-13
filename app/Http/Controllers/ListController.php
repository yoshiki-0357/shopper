<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\User;
use App\Models\Item;
use Illuminate\Support\Facades\Log;


class ListController extends Controller
{
	
	public function index(){
        $item = new Item;
        $items = $item->get();
        Log::info($items);
        return view('index', compact('items'));        
	}


    public function create(){
        return view('create');
    }

    public function store(Request $request){
        Log::info($request);

        $request->validate([
            'image' => 'required|image',
            'shop_name' => 'required',
            'color' => 'required',
            'pattern' => 'nullable',
            'text' => 'nullable',
        ]);

        /*
        // 画像マネージャーをインスタンス化
        $manager = new ImageManager(new Driver());

       // Interventionで画像を生成
        $image = $manager->read($request->file('image')->getPathname());

        // リサイズ（横800px, 高さ自動）
        $image->resize(800, null);

        // エンコード（JPEG, 品質80）
        $encoded = $image->toJpeg(80);

        // ファイル名作成
        $filename = uniqid() . '.jpg';
        $path = 'uploads/' . $filename;

        // 保存（storage/app/public/uploads/ に）
        Storage::disk('public')->put($path, $encoded);

        Storage::disk('public')->put($path, $request->image);
        */

        // ファイル名作成
        $filename = uniqid() . '.jpg';
        $path = 'uploads/' . $filename;

        // 保存（storage/app/public/uploads/ に）
        Storage::disk('public')->put($path, $request->image);

        $imagePath = $request->file('image')->store('uploads', 'public');

        $item = new Item;
        $item->image = $imagePath;
        $item->shop_name = $request->shop_name;
        $item->color = $request->color;
        $item->pattern = $request->pattern;
        $item->text = $request->text;
        $item->created_at = "1"; //固定値
        $item->created_dt = now();
        $item->updated_at = "1"; //固定値
        $item->updated_dt = now();
        $item->save();
        
        return redirect('index');
    }

    public function detail($id){
        $item = Item::findOrFail($id);
        return view('detail', compact('item'));
    }
}
