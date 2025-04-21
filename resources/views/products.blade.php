@extends('layout')
@section('title')
Products Page
@endsection
@section('content')
<h1 class="page-title">This is Products Page</h1>
{{-- <div class="products-container">
    <h1 class="products-header">Products</h1>
    <h3>{{$product['type']}}</h3>
    <h3>{{$product['name']}}</h3>
    <h3>{{$product['brand']}}</h3>
</div> --}}

<div>
    <h1>Products</h1>
    @foreach ($products as $product)
            <h3>Type: {{$product['type']}}</h3>
            <h4>Name: {{$product['name']}}</h4>
            <h4>Brand: {{$product['brand']}}</h4>
            <img src="{{$product['image']}}" height="200px"/>
            
    @endforeach
</div>
@endsection
