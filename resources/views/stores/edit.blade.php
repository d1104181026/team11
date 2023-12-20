@extends('app')
@section('title', '編輯特定商店')
@section('_theme', '編輯中的商店')

@section('_contents')
    @include('message.list')
    {!! Form::model($store, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\StoresController@update', $store->id]]) !!}
    @include('stores.form', ['submitButtonText'=>'更新商店資料'])
    {!! Form::close() !!}
@endsection
