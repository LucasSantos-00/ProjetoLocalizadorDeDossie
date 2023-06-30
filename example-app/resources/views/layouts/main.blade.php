<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Raleway:300,400,500|Poppins:300,400,500" rel="stylesheet">

</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <form class="d-flex me-auto" role="search" action="/" method="get">
            <input class="form-control me-2" type="search" placeholder="Pesquisar Aluno" aria-label="Search" name="search" id="search">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </form>
        <div class="navbar-nav">
            <a href="/dossies/criar" class="nav-link"><i class="bi bi-plus-circle"></i> Criar Aluno</a>
            <a href="/turmas/criar" class="nav-link"><i class="bi bi-plus-circle"></i> Criar Turma</a>
            <a href="/" class="nav-link"><i class="bi bi-house"></i> Início</a>
            <div class="dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="nav-link">
                    <i class="bi bi-person-circle"></i> Usuário
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="nav-link">
                    <li>
                        <a href="#" class="dropdown-item">Conta</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a href="#" class="dropdown-item">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- Sidebar -->
<div class="container-flex">
    <div class="row">
        <div class="d-flex flex-column flex-shrink-0 p-3 col-6" id="sideBar">
            <h1 id="lateralTitle">Cursos <i class="bi bi-arrow-down"></i></h1>
            <hr class="divider" id="lateralDivider">

            <form class="d-flex" role="search" action="/turmas/mostrar" method="get">
                <button class="btn btn-dark btn-block" type="submit" name="curso" value="DDS">Desenvolvimento de Sistemas</button>
            </form>

{{--            <form class="d-flex" role="search" action="/turmas/mostrar" method="get">--}}
{{--                <button class="btn btn-dark btn-block" type="submit" name="curso" value="AUI">Automação Industrial</button>--}}
{{--            </form>--}}

            <a class="btn btn-dark btn-block" href="/turmas/erro">Mecatrônica</a>
            <a class="btn btn-dark btn-block" href="/turmas/erro">Mecânica</a>
            <a class="btn btn-dark btn-block" href="/turmas/erro">Usinagem</a>
            <a class="btn btn-dark btn-block" href="/turmas/erro">Elétrica</a>
            <a class="btn btn-dark btn-block" href="/turmas/erro">Robótica</a>
            <a class="btn btn-dark btn-block" href="/turmas/erro">Manutenção Automotiva</a>
            <a class="btn btn-dark btn-block" href="/turmas/erro">Eletrotécnica</a>
            <a class="btn btn-dark btn-block" href="/turmas/erro">Redes de Computadores</a>
            <a class="btn btn-dark btn-block" href="/turmas/erro">Administração</a>
            <a class="btn btn-dark btn-block" href="/turmas/erro">Tornearia</a>
        </div>

        <div class="d-flex col-9" id="dynamicContent">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>

</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
