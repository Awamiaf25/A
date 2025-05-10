<?php

namespace App\Models;
use App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'name',
        'discreption',
        'icon',
    ];
}
