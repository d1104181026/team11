@extends('app')

@section('title', '便利店網站 - 列出所有商品')

@section('_contents')
編號：{{ $product->id }}<br/>
連鎖便利店：{{ $product->inventory }}<br/>
官網：{{ $product->official web }}<br/>
@endsection