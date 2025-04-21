<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getProduct()
    {
        return view('products');
    }

    public function myProduct()
    {
        return view('myProducts');
    }

    public function callUs()
    {
        return view('callUs');
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }
}
