<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    //
    public function index(Request $request){
        $items = Product::all();
        return view('Shop.index', ['items' => $items]);
    }
}
