<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Time2share</title>
</head>
<body>

<p>{{$product}}</p><br />

    <ul>
    @foreach($product as $product)
        <li><img src="{{$product->image_path}}" alt="{{$product->image_path}}"></li>
    @endforeach        
    </ul>


    <p>je zit in de index: '/products'</p>
</body>
</html>