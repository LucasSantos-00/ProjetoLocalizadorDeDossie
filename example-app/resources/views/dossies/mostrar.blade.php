{{--Tela De Inicio Do App--}}

@extends('layouts.main')

@section('title', 'Mostrar Dossie')

@section('content')

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
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$dossie->nome}}</td>
                <td>{{$dossie->matricula}}</td>
                <td>{{$dossie->curso}}</td>
                <td>{{$dossie->turma}}</td>
                <td>{{$dossie->estante}}</td>
                <td>{{$dossie->lado}}</td>
                <td>
                    <a href="#" class="btn btn-info edit-btn" >Edit</a>
                    <form action="/dossies/{{  $dossie->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger delete-btn">Dell</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>

        <a class="btn" id="btn-nav" href="/dossies/perfil">Mostrar Aluno</a>

    @endforeach

@endsection
