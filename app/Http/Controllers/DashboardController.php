<?php

namespace App\Http\Controllers;

use App\Models\Product;
class DashboardController extends Controller
{
    public function index(){
        $products = Product::latest()->paginate(5);
        return view('welcome', ['products'=>$products]);
    }
}
