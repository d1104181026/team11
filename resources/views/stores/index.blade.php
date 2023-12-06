
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
            <td>{{ $stores->id }}</td>
            <td>{{ $stores->inventory }}</td>
            <td>{{ $stores->official web }}</td>
            <td><a href="{{ route('stores.show', ['id'=>$stores->id]) }}">顯示</a></td>
            <td><a href="{{ route('stores.edit', ['id'=>$stores->id]) }}">修改</a></td>    
            <td>
                <form action="{{ url('/stores/delete', ['id' => $store->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>    
        </tr>
    @endforeach
<table>

@endsection