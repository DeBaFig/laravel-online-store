@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<header class="py-3" style="background-image: url('https://live.staticflickr.com/2303/2523789923_003c6fe325_o.jpg'); background-repeat: no-repeat; background-size: cover;">
   <div class="text-center my-2">
      <img class="img-fluid rounded-circle mb-4" src="{{ asset('assets/people/assets/img/' . $viewData['person']['image'] ) }}" />

      <div class="container-fluid w-50 p-5" style="background-color: rgba(255, 255, 255, 0.54);">
         <h1 class="text-dark fs-3 fw-bolder">{{ $viewData['person']['name'] }}</h1>
         <p class="text-dark-50 mb-0 py-4">{{ $viewData['person']['presentation'] }}</p>

      </div>
   </div>
</header>
@endsection