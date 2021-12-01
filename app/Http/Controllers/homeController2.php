<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController2 extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function shop()
    {
        return view('shop');
    }
    public function contact()
    {
        return view('contact');
    }
    public function shop_single()
    {
        return view('shop-single');
    }

    public function home_admin()
    {
        return view('homeadmin');
    }
    
}
