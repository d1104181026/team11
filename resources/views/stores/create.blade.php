@extends('app')

@section('title','建立商店表單')

@section('store_theme','建立商品的表單')

@section('store_contents','建立商品表單')
    @include('message.list')
    {!! From::open(['url' => 'stores/store'] !!)}
    @include('stores.from',['submitButtonText'=>'新增商店表單'])
    {!! From::close() !!}
@endsection