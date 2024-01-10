@extends('app')

@section('title', '建立商店表單')

@section('ETAS_theme', '建立商店的表單')

@section('ETAS_contents')
    @include('message.list')
    {!! Form::open(['url' => 'stores/store']) !!}
    @include('stores.form', ['submitButtonText'=>'新增商店資料'])
    {!! Form::close() !!}
@endsection
