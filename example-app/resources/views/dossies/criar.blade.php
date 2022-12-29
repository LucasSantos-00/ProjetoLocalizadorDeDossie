{{--Formulario para criar um dossie e adicina-lo no banco de dados--}}

@extends('layouts.main')

@section('title', 'Criar Dossie')

@section('content')

    <div id="dossie-create-container" class="col-md-6-offset-md-3">
        <h1>Criando Um Dossie</h1>
        <form action="/dossies" method="post">
            @csrf

{{--            Nome do aluno:--}}

            <div class="form-group">
                <label for="title">Nome do Aluno:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Aluno">
            </div>

{{--            Idade do aluno:--}}

            <div class="form-group">
                <label for="title">Idade:</label>
                <input type="text" class="form-control" id="idade" name="idade" placeholder="Idade do Aluno">
            </div>

{{--            Matricula do aluno:--}}

            <div class="form-group">
                <label for="title">Matricula:</label>
                <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Matricula do Aluno">
            </div>

{{--            Curso/Turma do aluno--}}

            <div class="form-group">
                <label for="title">Curso:</label>
                <input type="text" class="form-control" id="curso" name="curso" placeholder="Curso do Aluno">
            </div>

{{--            Estante que o aluno esta--}}

            <div class="form-group">
                <label for="title">Estante:</label>
                <input type="text" class="form-control" id="estante" name="estante" placeholder="Estante do Aluno">
            </div>

{{--            Lado em que a estante do aluno esta--}}

            <div class="form-group">
                <label for="title">Lado:</label>
                <input type="text" class="form-control" id="lado" name="lado" placeholder="Lado do Aluno">
            </div>

{{--            Botao para enviar o formulario--}}

            <input type="submit" class="btn btn-primary" value="Inserir Aluno">

       </form> {{-- Fim da funcao formulario--}}
    </div>

@endsection
