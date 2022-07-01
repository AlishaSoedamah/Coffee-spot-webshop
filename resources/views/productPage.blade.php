@include('templates/header')
<style>
    .btn {
        background: green;
        padding: 10px;
        border: none;
        border-radius: 10px;
        color: white;
    }

    .btn:hover {
        cursor: pointer;
    }
</style>
<div>
    <h1>{{$singleProduct->name}}</h1>
    <p>{{$singleProduct->desc}}</p>
    <a href="/products/{{$singleProduct->id}}">${{$singleProduct->price}}</a>
    <a href="/products/{{$singleProduct->id}}"><button class="btn">Buy now</button></a>
</div>
@include('templates/footer')