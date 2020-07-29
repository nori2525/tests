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
        if($items->isEmpty()){
            return view('Shop.mypage', ['items' => $items, 'sum' => 0]);
        }else{
            $sum = $items[0]->getSum();
            return view('Shop.mypage', ['items' => $items, 'sum' => $sum]);
        }
    }

    public function thk(){
        $items = Purchase::all();
        if($items->isEmpty()){
            return redirect('/shop/mypage')->with('error', '商品が選択されていません');
        }else{
            Purchase::query()->delete();
            return view('Shop.thk');
        }
    }
    public function add(Request $request){
        return view('/Shop.add');
    }
    public function create(Request $request){
        $this->validate($request, Product::$rules);
        $item = new Product;
        $form = $request->all();
        unset($form['_token']);
        $item->fill($form)->save();
        return redirect('/shop/add')->with('sen', '商品が追加されました。');
    }
}
