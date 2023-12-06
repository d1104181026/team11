@extends('app')

@section('title', '便利店網站 - 列出所有商品')

@section('_contents')
<h1>列出所有商品</h1>

<table>
    <tr>
        <th>商品名</th>
        <th>價格</th>
        <th>優惠</th>
        <th>庫存量</th>
        <th>連鎖便利店</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>




    
    @foreach ($products as $product)
        <tr>
            <td>{{ $products->name }} </td>
            <td>{{ $products->price }} </td>
            <td>{{ $products->discount }} </td>
            <td>{{ $products->tid }} </td>
            <td>{{ $products->inventory }} </td>
            <td><a href="{{ route('products.show',['id'=>$products->id]) }}" > 顯示</a></td>
            <td><a href="{{ route('products.edit',['id'=>$products->id]) }}" > 修改</a></td>
            <td>刪除</td>
        </tr>


    @endforeach

<table>

@endsection

