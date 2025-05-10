<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        //$validation = $req->validate([
        //    'prod_name'=>'required|string',
        //    'prod_desc'=>'nullable|string|max:1000',
        //    'prod_price'=>'required',
        //    'prod_stock'=>'required',
        //    'prod_image'=>'required|image|mimes:jpeg,png,jpg,pdf,gif',
        //    'categories_id'=>'required',
        //]);

        //$image=$req->file('prod_image');
          // تخزين الملف في ال storage 
       //$path=$image->store('images','public');

        $data = [
            'name'=>$req->prod_name,
            'discreption'=>$req->prod_desc,
            'price'=>$req->prod_price,
            'stock'=>$req->prod_stock,
            'image'=>$req->prod_image,
            'categories_id'=>$req->categories_id,
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
        //$validation = $req->validate([
        //    'prod_name'=>'required|string|max:255',
        //    'prod_desc'=>'nullable|string|max:255',
        //    'prod_price'=>'required',
        //    'prod_stock'=>'required',
        //    'prod_image'=>'nullable|image|mimes:png,jpeg,pdf,jpg,gif',
        //    'categories_id'=>'required'
        //]);
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
