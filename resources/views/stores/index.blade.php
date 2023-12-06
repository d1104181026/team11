
@extends('app')

@section('title', '便利店網站 - 列出所有商店')

@section('_contents')
<h1>列出所有商店</h1>

<table>
    <tr>
        <th>編號</th>
        <th>連鎖便利店</th>
        <th>官網</th>
        <th>建立時間</th>
        <th>修改時間</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($stores as $store)
        <tr>
            <td>{{ $store->id }}</td>
            <td>{{ $store->inventory }}</td>
            <td>{{ $store->official web }}</td>
            <td><a href="{{ route('stores.show', ['id'=>$store->id]) }}">顯示</a></td>
            <td><a href="{{ route('stores.edit', ['id'=>$store->id]) }}">修改</a></td>    
            <td>刪除</td>    
        </tr>
    @endforeach
<table>

@endsection