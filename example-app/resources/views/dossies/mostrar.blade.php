{{--Tela De Inicio Do App--}}

@extends('layouts.main')

@section('title', 'Mostrar Dossie')

@section('content')

    @foreach($dossies as $dossie)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Matricula</th>
                <th scope="col">Curso</th>
                <th scope="col">Estante</th>
                <th scope="col">Lado</th>
            </tr>
            </thead>
            <tbody>
            @if(count($dossies) > 0 )
                <tr>
                    <th scope="row">{{$dossie->id}}</th>
                    <td>{{$dossie->nome}}</td>
                    <td>{{$dossie->matricula}}</td>
                    <td>{{$dossie->curso}}</td>
                    <td>{{$dossie->estante}}</td>
                    <td>{{$dossie->lado}}</td>

                    <td>

                        <a href="#" class="btn btn-info edit-btn" >Editar </a>
                        <form action="/dossies/{{  $dossie->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger delete-btn"></button>

                        </form>


                    </td>
                </tr>
            </tbody>
        </table>

        @else
            <p>Nenhum dossie encontrado, <a href="/dossies/criar">Para Inseri um dossie</a></p>
        @endif

    @endforeach

@endsection
