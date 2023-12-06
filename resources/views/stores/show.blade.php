@extends('app')

@section('title', '顯示特定便利店')

@section('ETAS_theme', '您所選取的便利店資料')

@section('ETAS_contents')
編號：{{ $store->id }}<br/>
連鎖便利商店：{{ $store->name }}<br/>
官網：<a href="{{ $store->web }}" target="_blank">{{ $store->web }}</a><br/>
@endsection
