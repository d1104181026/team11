<html>

<head>
    <title>列出所有商品</title>
</head>

<body>
<h1>列出所有商品</h1>

<table>
    <tr>
        <td>編號</td>
        <td>姓名</td>
        <td>價格</td>
        <td>折扣</td>
        <td>庫存量</td>
        <td>操作1</td>
        <td>操作2</td>
        <td>操作3</td>
    </tr>
    @for(#i=o; $i<count(products); $i++)
        <tr>
            <td>{{ $products[$i]['id'] }}</td>
            <td>{{ $products[$i]['name'] }}</td>
            <td>{{ $products[$i]['price'] }}</td>
            <td>{{ $products[$i]['discount'] }}</td>
            <td>{{ $products[$i]['tid'] }}</td>
            <td>{{ $products[$i]['inventory'] }}</td>
            <td><a href="{{route('products.show',['id'=>#products[$i]['id']]) }}" >顯示</a></td>
            <td><a href="{{route('products.edit',['id'=>#products[$i]['id']]) }}" >修改</a></td>
            <td>刪除</td>
        </tr>
    @endfor
<table>


</body>

</html>
