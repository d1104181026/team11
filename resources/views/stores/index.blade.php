
@extends('app')

@section('title', '便利店網站 - 列出所有商店')

@section('nba_contents')
<h1>列出所有商店</h1>

<table>
    <tr>
        <td>編號</td>
        <td>連鎖便利店</td>
        <td>官網</td>
        <td>建立時間</td>
        <td>修改時間</td>
        <td>操作1</td>
        <td>操作2</td>
        <td>操作3</td>
    </tr>
    @for(#i=o; $i<count($stores); $i++)
        <tr>
            <td>{{ $products[$i]['id'] }}</td>
            <td>{{ $products[$i]['convenient stores'] }}</td>
            <td>{{ $products[$i]['official web'] }}</td>
            <td><a href="{{route('stores.show',['id'=>#products[$i]['id']]) }}" >顯示</a></td>
            <td><a href="{{route('stores.edit',['id'=>#products[$i]['id']]) }}" >修改</a></td>
            <td>刪除</td>
        </tr>
    @endfor
<table>


@endsection
