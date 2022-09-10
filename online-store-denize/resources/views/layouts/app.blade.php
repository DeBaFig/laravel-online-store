<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Denize Bassi Figueiredo" />
    <title>@yield('title', $viewData["title"])</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/home/assets/favicon.ico') }}" />
    <!-- Bootstrap icons-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/home/css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container px-4 px-lg-5 ">
            <a class="navbar-brand" href="{{ route('home.index') }}"><img src="{{ asset('assets/home/assets/icons/brand.png') }}" style="width: 3rem;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><img class="p-1" src="{{ asset('assets/home/assets/icons/hamburger.png') }}" style="width: 2rem;"></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 ">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('home.index') }}"><img class="p-1" src="{{ asset('assets/home/assets/icons/home.png') }}" style="width: 2rem;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}"><img class="p-1" src="{{ asset('assets/home/assets/icons/products.png') }}" style="width: 2rem;">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('people.index') }}"><img class="p-1" src="{{ asset('assets/home/assets/icons/pessoas.png') }}" style="width: 2rem;">Pessoas</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('home.about') }}"><img class="p-1" src="{{ asset('assets/home/assets/icons/about.png') }}" style="width: 2rem;">Sobre nós</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <div class="container text-muted m-0 text-center text-white">
                <span>Orgulhosamente Feito por <a href="https://github.com/DeBaFig" target="_blank">DeBaFig</a></span>
                <p>Para construção foi usado:</p>
                <p><a href="https://www.flaticon.com/free-icons/teacher" target="_blank" title="teacher icons">Flaticon</a></p>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    
    <script src="{{ asset('assets/home/js/scripts.js') }}"></script>
</body>

</html>  