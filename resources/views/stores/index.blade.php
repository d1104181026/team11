
@extends('app')

@section('title', '電子標籤自動化系統 - 列出所有商店')

@section('ESL_contents')
<h1>列出所有商店</h1>

<table>
    <tr>
        <th>編號</th>
        <th>連鎖便利商店</th>
        <th>官網</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @for($i=0; $i<count($stores); $i++)
        <tr>
            <td>{{ $players[$i]['id'] }}</td>
            <td>{{ $players[$i]['name'] }}</td>
            <td>{{ $players[$i]['web'] }}</td>
            <td><a href="{{ route('stores.show', ['id'=>$stores[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{ route('stores.edit', ['id'=>$stores[$i]['id']]) }}">修改</a></td>    
            <td>刪除</td>    
        </tr>
    @endfor
<table>
@endsection