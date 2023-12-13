@extends('app')

@section('title','編輯特定商品')

@section('product_theme','編輯中的商品')

@section('product_contents')
    {!! From::model($product , ['method' => 'PATCH', 'action' => ['\App\Http\Controllers\ProductsController@update',$product->id]]) !!}
    @include('products.from',['submitButtonText'=>'更新商品資料'])
    {!! From::close() !!}
@endsection