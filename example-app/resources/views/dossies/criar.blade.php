@extends('layouts.main')

@section('title', 'Criar Dossie')

@section('content')

    <div id="dossie-create-container" class="col-md-6 offset-md-3">
        <h1>Criando um Dossie</h1>
        <form action="/dossies" method="post">
            @csrf

            <!-- Nome do aluno -->
            <div class="form-group">
                <label for="nome">Nome do Aluno:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Aluno">
            </div>

            <!-- Idade do aluno -->
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="text" class="form-control" id="idade" name="idade" placeholder="Idade do Aluno">
            </div>

            <!-- Matricula do aluno -->
            <div class="form-group">
                <label for="matricula">Matricula:</label>
                <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Matricula do Aluno">
            </div>

            <!-- Curso/Turma do aluno -->
            <div class="form-group">
                <label for="curso">Curso:</label>
                <input type="text" class="form-control" id="matricula" name="curso" placeholder="Curso do Aluno">
            </div>

            <div class="form-group">
                <label for="turma">Turma:</label>
                <input type="text" class="form-control" id="turma" name="turma" placeholder="Turma do Aluno">
            </div>

            <!-- Estante que o aluno está -->
            <div class="form-group">
                <label for="estante">Estante:</label>
                <input type="text" class="form-control" id="estante" name="estante" placeholder="Estante do Aluno">
            </div>

            <!-- Lado em que a estante do aluno está -->
            <div class="form-group">
                <label for="lado">Lado:</label>
                <input type="text" class="form-control" id="lado" name="lado" placeholder="Lado do Aluno">
            </div>

            <!-- Botão para enviar o formulário -->
            <button type="submit" class="btn btn-primary">Inserir Aluno</button>
        </form>
    </div>

@endsection
