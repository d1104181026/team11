
@extends('app')

@section('title', '便利店網站 - 列出所有商品')

@section('ETAS_theme', '商品')

@section('ETAS_contents')
<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    <a href="{{ route('products.create') }} ">新增商品</a>
    <a href="{{ route('products.index') }} ">所有商品</a>
    <form action="{{ url('products/discount') }}" method='GET'>
        {!! Form::label('discount', '選取折扣') !!}
        {!! Form::select('discount', $discounts, $selectedDiscount , ['class' => 'form-control']) !!}
        <input class="btn btn-default" type="submit" value="查詢" />
        @csrf
    </form>
</div>

<table>
    <tr>
        <th>商品名</th>
        <th>價格</th>
        <th>優惠</th>
        <th>連鎖便利店</th>
        <th>庫存量</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>




    
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }} </td>
            <td>{{ $product->price }} </td>
            <td>{{ $product->discount }} </td>
            <td>{{ $product->tid }} </td>
            <td>{{ $product->inventory }} </td>
            <td><a href="{{ route('products.show',['id'=>$product->id]) }}" > 顯示</a></td>
            <td><a href="{{ route('products.edit',['id'=>$product->id]) }}" > 修改</a></td>
            <td>
                <form action="{{ url('/products/delete', ['id' => $product->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>


    @endforeach

<table>
{{ $products->withQueryString()->links() }}

@endsection

