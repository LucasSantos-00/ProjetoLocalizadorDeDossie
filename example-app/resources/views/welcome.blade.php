{{--Tela De Inicio Do App--}}

@extends('layouts.main')

@section('title', 'Inicio')

@section('content')

    @foreach($dossies as $dossie)

        <p>{{$dossie-> id}}-
            {{$dossie -> nome}}-
            {{$dossie -> idade}}-
            {{$dossie -> matricula}}-
            {{$dossie -> curso}}-
            {{$dossie -> estante}}-
            {{$dossie -> lado}}</p>

    @endforeach

@endsection
