@extends('layouts.ShopApp')

@section('title', 'Shopping!')

@section('content')
    <p>商品一覧</p>
    <p>{{session('error')}}</p>
    @foreach($items as $item)
        <ul>
        <li>{{$item->getData()}}</li>
        </ul>
    @endforeach
    <p>合計金額： {{$sum}} 円</P>

    <a href="/shop/thk">購入</a>
    <a href="/shop">戻る</a>

    
@endsection