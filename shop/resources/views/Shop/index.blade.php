@extends('layouts.ShopApp')

@section('title', 'Shopping!')

@section('header')
    @parent
    <a href="/shop/mypage" class="cage">購入ページへ</a>
    <a href="/shop/add" >商品を追加する</a>
@endsection    

@section('content')
    <p>商品一覧</p>
    @foreach($items as $item)
        <ul>
        <li><a href="/shop/buy?id={{$item->id}}" >{{$item->getData()}}</a></li>
        </ul>
    @endforeach
@endsection