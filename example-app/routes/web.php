<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Rotas Da Aplicacao

use App\Http\Controllers\DossieController;

//Rotas GET

Route::get('/',[DossieController::class, 'index']);

Route::get('/dossies/criar',[DossieController::class, 'criar']);

Route::get('/dossies/{id}',[DossieController::class, 'mostra']);

Route::get('/dossies/mostrar',[DossieController::class, 'mostrarDossie']);

Route::get('/dossies/perfil',[DossieController::class, 'mostrarPerfil']);

Route::get('/turmas/mostrar',[DossieController::class, 'mostrarTurma']);

Route::get('/turmas/criar',[DossieController::class, 'criarTurma']);

Route::get('/turmas/erro',[DossieController::class, 'mostrarErro']);



//Rotas POST

Route::post('/dossies', [DossieController::class, 'store']);

Route::post('/turmas', [DossieController::class, 'criarTurmas']);

Route::post('/turmas/mostrar',[DossieController::class, 'mostrarTurma']);

Route::post('/turmas/criar',[DossieController::class, 'criarTurma']);

Route::post('/',[DossieController::class, 'index']);

//Rotas Delete

Route::delete('/dossies/{id}',[DossieController::class, 'destroy']);
