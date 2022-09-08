@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container text-center">
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner ">
                    @foreach ($viewData["imgs"] as $key => $imagem)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="5000">
                        <img src="{{ asset('assets/home/assets/img/' .$imagem) }}" class="d-block w-100">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col ms-auto">
            <p class="lead">{{ $viewData["description"] }}</p>
        </div>

    </div>
    <div class="row">
        <div class="col me-auto">
            <p class="lead">{{ $viewData["author"] }}</p>
        </div>
    </div>
</div>
</div>
</div>
@endsection