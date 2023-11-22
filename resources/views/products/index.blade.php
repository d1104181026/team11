<html>

<head>
    <title>列出所有商品</title>
</head>

<body>
<h1>列出所有商品</h1>

@for($i=0; $i<count($products);$i++)
     {{$products[$i]['name'] }} <br/>
     {{$products[$i]['price'] }} <br/>
     {{$products[$i]['discount'] }} <br/>
     {{$products[$i]['tid'] }} <br/>
     {{$products[$i]['inventory'] }} <br/></br>

@endfor

</body>
</html>