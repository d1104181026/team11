
@extends('app')

@section('title', '便利店網站 - 列出所有商店')

@section('ETAS_contents')
<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    @can('admin')
    <a href="{{ route('stores.create') }} ">新增店家</a>
    @endcan
    <a href="{{ route('stores.index') }} ">查詢所有店家</a>
    <a href="{{ route('stores.store') }} ">新增店家資料</a>
<table>
    <tr>
        <th>編號</th>
        <th>連鎖便利店</th>
        <th>官網</th>
        <th>建立時間</th>
        <th>修改時間</th>
        <th>操作1</th>
        @can('admin')
        <th>操作2</th>
        <th>操作3</th>
        @elsecan('manager')
        <th>操作2</th>
        @endcan
    </tr>
    @foreach($stores as $store)
        <tr>
            <td>{{ $store->id }}</td>
            <td>{{ $store->inventory }}</td>
            <td>{{ $store->web }}</td>
            <td><a href="{{ route('stores.show', ['id'=>$store->id]) }}">顯示</a></td>
            @can('admin')
            <td><a href="{{ route('stores.edit', ['id'=>$store->id]) }}">修改</a></td>    
            <td>
                <form action="{{ url('/stores/delete', ['id' => $store->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
            @elsecan('manager')
            <td><a href="{{ route('stores.edit', ['id'=>$store->id]) }}">修改</a></td>    
            @endcan
        </tr>
    @endforeach
<table>

@endsection