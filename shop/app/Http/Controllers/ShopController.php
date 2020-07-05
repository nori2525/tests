<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Purchase;

class ShopController extends Controller
{
    //
    public function index(Request $request){
        $items = Product::all();
        return view('Shop.index', ['items' => $items]);
    }
    
    public function buy(Request $request){
        $id = $request->id;
        $bought = Product::find($id);
        $purchase = new Purchase;
        $purchase->name = $bought->name;
        $purchase->price = $bought->price;
        $purchase->save();
        return redirect('/shop');
    }

    public function myPage(Request $request){
        $items = Purchase::all();
        return view('Shop.mypage', ['items' => $items]);
    }
}
