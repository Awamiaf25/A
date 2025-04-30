<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;
class ProductsController extends Controller
{
    public function index()
    {
        $get_cat=Categories::all();
        $get_data=Products::all();
        return view('Products.index',['cat_data'=>$get_cat, 'prod_data'=>$get_data]);
    }
    
    public function create(Request $req)
    {
        $validation = $req->validate([
            'prod_name'=>'required|string|max:255',
            'prod_desc'=>'nullable|string|max:255',
            'prod_price'=>'required',
            'prod_stock'=>'required',
            'prod_image'=>'nullable',
            'categories_id'=>'required'
        ]);

        $data = [
            'name'=>$req->prod_name,
            'discreption'=>$req->prod_desc,
            'price'=>$req->prod_price,
            'stock'=>$req->prod_stock,
            'image'=>$req->prod_image,
            'categories_id'=>$req->categories_id

        ];

        $items=Products::create($data);
        $items->save();

        return redirect()->route('products');

    }

    public function delete($number)
    {
        $data=Products::find($number);
        if ($data)
        {
            $data->delete();
        }
        return redirect()->route('products');
    }

    public function edit($number)
    {
        $data=Products::find($number);
        $catigories = Categories::ALL();
        return view('products.edit',['products'=>$data, 'cat_data'=>$catigories]);
    }

    public function update(request $req)
    {
        $data=Products::find($req->id);
        $data->update([
            'name'=>$req->prod_name,
            'discreption'=>$req->prod_desc,
            'price'=>$req->prod_price,
            'stock'=>$req->prod_stock,
            'image'=>$req->prod_image,
            'categories_id'=>$req->categories_id

        ]);
        return redirect()->route('products');
    }

}
