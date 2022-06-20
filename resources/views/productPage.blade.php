@include('templates/header')
<div>
    <h1>{{$singleProduct->name}}</h1>
    <p>{{$singleProduct->desc}}</p>
    <a href="/cart/add/{{$singleProduct->id}}">${{$singleProduct->price}}</a>
</div>
@include('templates/footer')