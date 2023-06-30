@extends('layouts.main')

@section('title', 'Mostrar Turmas')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Nenhuma turma foi encontrada nesse curso</h2>
                        <p class="text-center">Por favor, crie a turma desejada:</p>
                        <div class="text-center">
                            <a class="btn btn-primary btn-center" href="/turmas/criar">Criar Turma</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
