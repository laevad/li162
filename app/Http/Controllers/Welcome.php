<?php

namespace App\Http\Controllers;

use App\Models\Product;
class Welcome extends Controller
{
    public function index(){
        $products = Product::latest()->paginate(7);
        return view('welcome', ['products'=>$products]);
    }
}
