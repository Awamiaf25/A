<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
    public function logout(Request $req)
    {
        Auth::logout();
        return redirect('/login');
    }

}
