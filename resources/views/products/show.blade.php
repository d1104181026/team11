@extends('app')

@section('title', '便利店網站 - 列出所有商品')

@section('ETAS_theme','您所選取的商品資料')

@section('ETAS_contents')
<h1>顯示單一商品</h1>
商品名：{{ $product->name }}<br/>
價格：{{ $product->price }}<br/>
優惠：{{ $product->discount }}<br/>
庫存量：{{ $product->inventory}}<br/>
連鎖便利店：{{ $product->tid }}<br/>
@endsection
