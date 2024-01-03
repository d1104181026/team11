@extends('app')

@section('title', '建立商品表單')

@section('ETAS_theme', '建立商品的表單')

@section('ETAS_contents')
    @include('message.list')
    {!! Form::open(['url' => 'products/store']) !!}
    @include('products.form', ['submitButtonText'=>"新增商品資料"])
    {!! Form::close() !!}
@endsection
