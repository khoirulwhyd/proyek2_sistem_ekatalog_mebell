<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

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
        $products = Product::all();
        return view('shop',compact('products'));
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
