@extends('app')

@section('title', '便利店網站 - 列出所有商品')

@section('_contents')
編號：{{ $product->id }}<br/>
連鎖便利店：{{ $product->inventory }}<br/>
官網：{{ $product->official web }}<br/>

<h1>{{ $product->inventory }}的所有商品</h1>

<table>
    <tr>
        <th>商品名</th>
        <th>價格</th>
        <th>優惠</th>
        <th>庫存量</th>
        <th>連鎖便利店</th>
    </tr>




    @foreach ($players as $player)
        <tr>
            <td>{{ $product->name }} </td>
            <td>{{ $product->price }} </td>
            <td>{{ $product->discount }} </td>
            <td>{{ $product->store->name }} </td>
            <td>{{ $product->inventory }} </td>
        </tr>
    @endforeach

<table>
@endsection