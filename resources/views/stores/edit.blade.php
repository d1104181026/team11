@extends('app')

@section('title','編輯特定商店')

@section('store_theme','編輯中的商店')

@section('store_contents')
    @include('message.list')
    {!! From::model($store , ['method' => 'PATCH', 'action' => ['\App\Http\Controllers\StoresController@update',$store->id]]) !!}
    @include('stores.from',['submitButtonText'=>'更新商店資料'])
    {!! From::close() !!}
@endsection