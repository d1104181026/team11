@extends('app')

@section('title', '顯示特定商店')

@section('ETAS_theme', '您所選取的商店資料')

@section('ETAS_contents')
<h1>顯示單一商店</h1>
編號：{{ $store->id }}<br/>
連鎖便利商店：{{ $store->name }}<br/>
官網：<a href="{{ $store->web }}" target="_blank">{{ $store->web }}</a><br/>

<h1>{{ $store->name }}的所有商品</h1>

<table>
    <tr>
        <th>商品名</th>
        <th>價格</th>
        <th>優惠</th>
        <th>庫存量</th>
        <th>連鎖商店</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->discount }}</td>
            <td>{{ $product->inventory }}</td>
            <td>{{ $product->store->name }}</td>
        </tr>
    @endforeach
<table>
@endsection
