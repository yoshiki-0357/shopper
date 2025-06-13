<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [ListController::class, 'index'])->name('index');
Route::get('create', [ListController::class, 'create'])->name('create');

Route::post('store',[ListController::class, 'store'])->name('store');
Route::post('update',[ListController::class, 'update'])->name('update');

Route::get('detail/{id}',[ListController::class, 'detail'])->name('detail');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
