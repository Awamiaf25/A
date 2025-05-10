<?php

namespace App\Http\Controllers;
use App\Models\Categories;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $getdata=Categories::ALL();
        return view('categories.index',['data'=>$getdata]);
    }

    public function create(Request $req)
    {
        $validation = $req->validate([
            'cat_name'=>'required|string|max:255',
            'cat_desc'=>'nullable|string|max:255',
            'cat_icon'=>'nullable|string|max:255',
        ]);

        $data = [
            'name'=>$req->cat_name,
            'discreption'=>$req->cat_desc,
            'icon'=>$req->cat_icon
        ];

        $items=Categories::create($data);
        $items->save();

        return redirect()->route('categories');
    }

    public function delete($number)
    {
        $data=Categories::find($number);
        if ($data)
        {
            $data->delete();
        }
        return redirect()->route('categories');
    }

    public function edit($number)
    {
        $data=Categories::find($number);
        return view('categories.update',['categories'=>$data]);
    }

    public function update(request $req)
    {
        $data=Categories::find($req->id);
        $data->update([
            'name'=>$req->cat_name,
            'discreption'=>$req->cat_desc,
            'icon'=>$req->cat_icon
        ]);
        return redirect()->route('categories');
    }

}