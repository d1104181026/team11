@extends('app')

@section('title', '便利店網站 - 列出所有商品')

@section('您所選取的商品資料')

@section('_contents')
<h1>顯示單一商品</h1>
商品名：{{ $product->name }}<br/>
價格：{{ $product->price }}<br/>
優惠：{{ $product->discount }}<br/>
庫存量：{{ $product->inventorye}}<br/>
連鎖便利店：{{ $product->stores->name }}<br/>
@endsection
