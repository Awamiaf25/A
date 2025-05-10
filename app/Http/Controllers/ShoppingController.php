<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\Products;
use App\Model\Categories;

class ShoppingController extends Controller
{
    public function list($cat_id)
    {
        $data=DB::table('categories')->get();
        $products=DB::table('products')->where('categories_id','=', $cat_id)->get();
        return view('Shopping.list',['product'=>$products]);
    }

    public function details($id)
    {
        $products=DB::table('products')->where('id', '=', $id)->first();
        return view('Shopping.details',['info'=>$products]);
    }

    public function get_cat()
    {
        $data=db::table('categories')->get();
        return view('Shopping.welcome', ['cat_data'=>$data]);
    }

    public function cart()
    {
        $count=session()->get('count', 0);
        $count++;
        session()->put('count', $count);
        session()->put('prod_id');
        return redirect()->back()->with('تمت إضافة المنتج للسلة');
    }

    public function checkout()
    {
        return view('Shopping.checkout');
    }

    public function pay(Request $req)
    {
        $customer=[
            'name'=>$req->cust_name,
            'phone'=>$req->cust_phone,
        ];
        DB::table('customer')->insert($customer);
        $users=DB::table('customer')->where('name', '=', $req->cust_name)->first();

        $cart=[
            'prod_id'=>$req->cust_name,
            'cust_id'=>$req->cust_phone,
        ];
        session()->put('count', 0);
        DB::table('cart')->insert($cart);
        return view('Shopping.invoice', ['username'=>$users]);
    }
}
