@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="container px-4 px-lg-5 mt-5 text-center">
  <h1>ESSE SITE É UM PROJETO DE APRENDIZADO PHP + LARAVEL</h1>
  <h2>Para saber mais sobre entre no meu <a href="https://github.com/DeBaFig" target="_blank">GitHub</a>!</h2>
  <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 mt-5 justify-content-center">
    @foreach ($viewData["imgs_home"] as $key => $imagem)
    <div class="col mb-5">
      <div class="card text-white bg-dark mb-3 h-100">
        <img class="card-img-top" src="{{ asset( '/assets/home/assets/img/' . $imagem )}}" />
        <div class="card-body p-4">
          <div class="text-center">
            <h5 class="fw-bolder">Item - {{ ++$key  }}</h5>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection