@extends('layouts.main')

@section('title', 'Mostrar Turmas')

@section('content')
    <div class="container">
        @if(count($dossies) > 0)
            <table class="table text-center">
                <thead>
                <tr>
                    <th scope="col">Turma</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dossies as $dossie)
                    <tr>
                        <td class="align-middle text-center">{{ $dossie->turma }}</td>
                        <td class="align-middle text-center">
                            <a class="btn btn-primary" href="/dossies/mostrar">Mostrar Alunos</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p class="text-center">Nenhum dossie encontrado. <a href="/turmas/criar">Clique aqui</a> para inserir um dossie.</p>
        @endif
    </div>
@endsection
