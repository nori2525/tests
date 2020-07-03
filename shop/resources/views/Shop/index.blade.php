@extends('layouts.ShopApp')

@section('title', 'Shopping!')

@section('content')
    <p>商品一覧</p>
    @foreach($items as $item)
        <ul>
        <li>{{$item->getData()}}</li>
        </ul>
    @endforeach
@endsection