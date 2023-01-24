{{--Formulario para criar um dossie e adicina-lo no banco de dados--}}

@extends('layouts.main')

@section('title', 'Criar Turmas')

@section('content')

    <div id="turma-create-container" class="col-md-6-offset-md-3">
        <h1>Criando Uma Turma Nova</h1>
        <form action="/" method="post">
            @csrf

{{--    Nome do curso:--}}

            <div class="form-group">
                <label for="title">Nome do Curso:</label>
                <input type="text" class="form-control" id="nomeCurso" name="nomeCurso" placeholder="Nome do Curso">
            </div>

{{--    Botao para enviar o formulario      --}}

            <input type="submit" class="btn btn-primary" value="Inserir Curso">

       </form> {{-- Fim da funcao formulario--}}
    </div>

@endsection


