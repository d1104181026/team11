
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
    @for($i=0; $i<count($stores); $i++)
        <tr>
            <td>{{ $stores[$i]['id'] }}</td>
            <td>{{ $stores[$i]['inventory'] }}</td>
            <td>{{ $stores[$i]['official web'] }}</td>
            <td><a href="{{ route('stores.show', ['id'=>$stores[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{ route('stores.edit', ['id'=>$stores[$i]['id']]) }}">修改</a></td>    
            <td>刪除</td>    
        </tr>
    @endfor
<table>

@endsection