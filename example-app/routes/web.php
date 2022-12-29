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

Route::get('/dossies/{id}',[DossieController::class, 'mostrar']);


//Rotas POST

Route::post('/dossies', [DossieController::class, 'store']);


