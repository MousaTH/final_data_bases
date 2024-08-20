<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Products</h1>
<a href="{{route('home.store')}}">Create new product</a>
@if(session('success'))
    <div>
        {{session('success')}}
    </div>
@endif
@foreach($products as $product)
    <div>
            <h2>{{$product->name_of_product}}</h2>
            <p>{{$product->description_of_product}}</p>
            <p>{{$product->categories->category_name}}</p>

    </div>
@endforeach
</body>
</html>
