{{--Layout Fixo e a NavBar--}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    {{--    Fonte do Google--}}
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    {{--    CSS Bootstrap--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{--    CSS da aplicaçao--}}
    <link rel="stylesheet" href="/css/app.css" >
    <script src="/js/app.js"></script>

</head>

<body class="antialiased">

<header>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link active" aria-current="page" href="/contato">Contato</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href='/dossies/criar'>Criar Um Dossie</a>
                    </li>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='dossies/mostrar'>Mostrar Um Dossie</a>
                    </li>

                </ul>
                <form action="/" method="get">
                    <input type="text" id="search" name="search" class="form-control" placeholder="Procurar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Procurar</button>
                </form>
            </div>
        </div>
    </nav>


</header>

<main>

    <div class="container-fluid">
        <div class="row">
            @if(session('msg'))
                <p class="msg">{{ session('msg') }}</p>
            @endif
            @yield('content')
        </div>
    </div>

</main>

<footer>Teste Do TCC</footer>

</body>
</html>
