@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<?php
$randomNumber = random_int(0, sizeof($viewData["products"]) - 1); ?>
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('assets/products/img/' . $viewData["products"][$randomNumber]['image'] ) }}" /></div>
        <div class="col-lg-5">
            <h1 class="font-weight-light">Nossos Destaques: </h1>
            <h1 class="font-weight-light">{{ $viewData["products"][$randomNumber]['name'] }}</h1>
            <p>{{ $viewData["products"][$randomNumber]['description'] }}</p>
            <a class="btn btn-dark" href="{{ route('products.show', ['id'=> $viewData["products"][$randomNumber]['id']]) }}">Saiba Mais!</a>
        </div>
    </div>
    <!-- Call to Action-->
    <div class="card text-white bg-dark my-5 py-4 text-center">
        <div class="card-body">
            <h3 class="text-white m-0">Conheça também outros produtos:</h3>
        </div>
    </div>
    <div class="row gx-4 gx-lg-5">
        @foreach ($viewData["products"] as $key => $item)
        @if ($key != $randomNumber)
        <div class="col-md-4 mb-5">
            <div class="card text-white bg-dark">
                <img src="{{ asset('assets/products/img/' . $viewData["products"][$key]['thumbnail'] ) }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $item['name'] }}</h5>
                    <p class="card-text">{{ $item['description'] }}</p>
                    <a href="{{ route('products.show', ['id'=> $item['id']]) }}" class="btn btn-light">Veja Mais!</a>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>

@endsection