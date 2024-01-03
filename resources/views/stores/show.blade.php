@extends('app')

@section('title', '便利店網站 - 列出所有商品')

@section('ETAS_contents')
<h1>顯示單一商店</h1>
編號：{{ $store->id }}<br/>
連鎖便利店：{{ $store->inventory }}<br/>
官網：{{ $store->web }}<br/>


<h1>{{ $store->name }}的所有商品</h1>

<table>
    <tr>
        <th>商品名</th>
        <th>價格</th>
        <th>優惠</th>
        <th>庫存量</th>
        <th>連鎖便利店</th>
         
    </tr>





@foreach ($products as $product)
        <tr>
            <td>{{ $products->name }} </td>
            <td>{{ $products->price }} </td>
            <td>{{ $products->discount }} </td>
            <td>{{ $products->tid }} </td>
            <td>{{ $products->store->name }} </td>
           
        </tr>


    @endforeach

<table>


@endsection