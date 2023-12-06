
@extends('app')

@section('title', '電子標籤自動化系統 - 列出所有商品')

@section('ETAS_theme', '商品')

@section('ETAS_contents')
<h1>列出所有商品</h1>

<table>
    <tr>
        <th>商品名</th>
        <th>價格</th>
        <th>優惠</th>
        <th>庫存量</th>
        <th>連鎖商店</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>

    @for($i=0; $i<count($products); $i++)
        <tr>
            <td>{{ $products[$i]['name'] }} </td>
            <td>{{ $products[$i]['price'] }} </td>
            <td>{{ $products[$i]['discount'] }} </td>
            <td>{{ $products[$i]['inventory'] }} </td>
            <td>{{ $products[$i]->store->name }}</td>
            <td><a href="{{ route('products.show',['id'=>$products[$i]['id']]) }}" > 顯示</a></td>
            <td><a href="{{ route('products.edit',['id'=>$products[$i]['id']]) }}" > 修改</a></td>
            <td>
                <form action="{{ url('/products/delete', ['id' => $products[$i]['id']]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>


    @endfor

<table>

@endsection


