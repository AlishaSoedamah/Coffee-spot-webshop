<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
    <link rel="stylesheet" src="/css/app.css">
</head>

<body>
    @include('templates/header')
    <h1 class="text-center">Our Products</h1>
    @foreach($products as $product)
    <h2> {{$product->name}} </h2>
    <p> {{$product->desc}} </p>
    <a href="/product/{{$product->id}}">${{$product->price}} </a>
    @endforeach
    @include('templates/footer')
</body>

</html>