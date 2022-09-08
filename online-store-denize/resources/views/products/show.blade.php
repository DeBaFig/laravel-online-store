@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<!-- Product Details Area Start -->
<div class="single-product-area section-padding-100 clearfix">
    <div class="container-fluid m-5 p-3">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="single_product_thumb">
                    <figure class="figure">
                        <img src="{{ asset('assets/products/img/' . $viewData["product"]['image'] ) }}" class="figure-img img-fluid rounded" alt="...">
                    </figure>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="container">
                    <div class="container">
                        <p class="py-1">{{"R$" .  number_format((float)$viewData["product"]['price'], 2, ',', '')}}</p>
                        <h2 class="pt-3">{{ $viewData["product"]['name'] }}</h2>
                        <p class="avaibility"><img src="{{ asset('assets/products/icon/correct.png') }}"/> Estoque!</p>
                        <p>{{ $viewData["product"]['description'] }}</p>
                        <form method="post">
                            <button type="submit" class="btn btn-dark " disabled>Comprar!</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Details Area End -->
</div>
@endsection