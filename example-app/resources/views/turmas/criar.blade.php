@extends('layouts.main')

@section('title', 'Criar Turmas')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-4">Criando Uma Nova Turma</h1>
                <table class="table">
                    <tbody>
                    <tr>
                        <td>
                            <label for="nomeCurso" class="form-label">Nome do Curso:</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="nomeCurso" name="nomeCurso" placeholder="Nome do Curso" required>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-primary">Inserir Curso</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

<head>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
