@extends('layouts.main')

@section('title', $dossie -> title)

@section('content')

    <div class="col-md-10 offset-md-1-offset-md-1">
        <div class="row">

            <div id="info-container" class="col-md-6">

                <h1>{{ $dossie -> nome }}</h1>
                <p class="dossie-idade">{{ $dossie -> idade }}</p>
                <p class="dossie-matricula">{{ $dossie -> matricula }}</p>
                <p class="dossie-curso">{{ $dossie -> curso }}</p>
                <p class="dossie-estante">{{ $dossie -> estante }}</p>
                <p class="dossie-lado">{{ $dossie -> lado }}</p>



            </div>

        </div>
    </div>






@endsection
