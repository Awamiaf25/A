<?php

namespace App\Models;
use App\Models\Categories;


use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name',
        'discreption',
        'price',
        'stock',
        'image',
        'categories_id',
    ];

}
