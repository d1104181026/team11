<html>

<head>
    <title>列出所有商品</title>
</head>

<body>
<h1>列出所有商品</h1>

<table>
    <tr>
        <th>商品名</th>
        <th>價格</th>
        <th>優惠</th>
        <th>庫存量</th>
        <th>連鎖便利店</th>
        <th>建立時間</th>
        <th>修改時間</th>
    </tr>




@for($i=0; $i<count($products); $i++)
    <tr>
       <td>{{$products[$i]['name'] }} </td>
       <td>{{$products[$i]['price'] }} </td>
       <td>{{$products[$i]['discount'] }} </td>
       <td>{{$products[$i]['tid'] }} </td>
       <td>{{$products[$i]['inventory'] }} </td>
       <td></td>


@endfor

</body>
</html>

