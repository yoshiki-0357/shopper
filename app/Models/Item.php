<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image',
        'shop_name',
        'color',
        'pattern',
        'text',
        'created_at',
        'created_dt',
        'updated_at',
        'updated_dt',
    ];

}
