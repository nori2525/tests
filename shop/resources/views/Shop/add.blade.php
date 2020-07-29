@extends('layouts.ShopApp')

@section('title', 'Shopping!')

@section('content')
    <p>商品追加ページ</p>
    <p>{{session('sen')}}</p>
    <form method="POST" action="/shop/add">
        {{ csrf_field() }}
        <ul>
            <li>
                <label>商品コード：
                <input type="text" name="product_id">
                </label>
            </li>
            <li>
                <label>商品名：
                <input type="text" name="name">
                </label>
            </li>
            <li>
                <label>出品者名：
                <input type="text" name="exhibitor">
                </label>
            </li>
            <li>
                <label>価格：
                <input  type="number" name="price">
                </label>
            </li>
            <li>
                <input type="submit" value="追加する">
            </li>
        </ul>
    </form>

    <a href="/shop">戻る</a>
@endsection