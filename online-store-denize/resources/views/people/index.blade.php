@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="container ms-auto mt-5">
    <div class="text-center col-auto">
        <h5>{{ $viewData['text'] }}</h5>
    </div>
    <div class="row gx-4 gx-lg-5 row-cols-2 p-2 justify-content-center">
        @foreach ($viewData["employees"] as $person)
        <div class="card mb-3 m-2" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('assets/people/assets/img/'. $person["image"]) }}" class="img-fluid rounded-start p-1" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $person['name'] }}</h5>
                        <p class="card-text">{{ $person['description'] }}</p>
                        <div class="card-body text-center">
                            <a href="{{ route('people.show', ['id'=> $person["id"]]) }}" class="btn bg-dark text-white">{{ $person["name"] }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection