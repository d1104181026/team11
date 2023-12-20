@extends('app')

@section('title','建立商品表單')

@section('product_theme','建立商品的表單')

@section('product_contents','建立商品表單')
    @include('message.list')
    {!! From::open(['url' => 'products/store'] !!)}
    @include('products.from',['submitButtonText'=>'新增商品表單'])
    {!! From::close() !!}
@endsection