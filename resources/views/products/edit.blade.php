@extends('app')

@section('title', '編輯特定商品')

@section('product_theme', '編輯中的商品')

@section('_contents')
    @include('message.list')
    {!! Form::model($product, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\ProductsController@update', $product->id]]) !!}
    @include('players.form', ['submitButtonText'=>"更新球員資料"])
    {!! Form::close() !!}
@endsection