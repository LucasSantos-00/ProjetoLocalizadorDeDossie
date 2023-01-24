@extends('layouts.main')

@section('title', 'Mostrar Turmas')

@section('content')

    @foreach($dossies as $dossie)
        @if(count($dossies) > 0 )
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Turma</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$dossie->turma}}</td>
                    <td>
                        <a class="btn" id="btn-nav" href="/dossies/mostrar">Mostrar Alunos</a>

{{--                        <form action="/dossies/{{  $dossie->id }}" method="POST">--}}
{{--                            @csrf--}}
{{--                            @method('delete')--}}
{{--                            <button type="submit" class="btn btn-danger delete-btn">Dell</button>--}}
{{--                        </form>--}}
                    </td>
                </tr>
            </tbody>
        </table>
        @else
            <p>Nenhum dossie encontrado, <a href="/turmas/criar">Para Inseri um dossie</a></p>
        @endif

    @endforeach

@endsection
