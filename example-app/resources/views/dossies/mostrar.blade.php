{{--tela de inicio do app--}}

@extends('layouts.main')

@section('title', 'Mostrar Dossie')

@section('content')

    <div class="container">
        @foreach($dossies as $dossie)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Matricula</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Turma</th>
                    <th scope="col">Estante</th>
                    <th scope="col">Lado</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center mb-4">{{ $dossie->nome }}</td>
                    <td class="align-middle">{{ $dossie->matricula }}</td>
                    <td class="align-middle">{{ $dossie->curso }}</td>
                    <td class="text-center mb-4">{{ $dossie->turma }}</td>
                    <td class="align-middle">{{ $dossie->estante }}</td>
                    <td class="align-middle">{{ $dossie->lado }}</td>
                    <td class="align-middle">
                        <a href="#" class="btn btn-info edit-btn">Editar</a>
                        <form action="/dossies/{{ $dossie->id }}" method="POST" class="delete-form">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger delete-btn">
                                <i class="fas fa-trash"></i> Excluir
                            </button>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>

            <a class="btn btn-primary" href="/dossies/{{ $dossie->id }}">Mostrar Aluno</a>

        @endforeach
    </div>

@endsection
