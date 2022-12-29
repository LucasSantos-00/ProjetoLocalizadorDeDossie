<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dossie;

//Controller Do Dossie

class DossieController extends Controller
{

    public function index(){
    //  funcao de pegar os dados do banco de forma geral e sem parametros

        $dossies = Dossie::all();

        return view('welcome', ['dossies' => $dossies ]);

    }

    public function criar(){
    //  funçao de criar um dossie

        return view('dossies.criar');

    }

    public function store(Request $request){
    //  funcao para colocar os dados no banco

    $dossie = new Dossie;

    $dossie-> id = $request->id;
    $dossie-> nome = $request->nome;
    $dossie-> idade = $request->idade;
    $dossie-> matricula = $request->matricula;
    $dossie-> curso = $request->curso;
    $dossie-> estante = $request->estante;
    $dossie-> lado = $request->lado;

    $dossie -> save();

    return redirect('/')->with('msg', 'Dossie foi registrado com sucesso!');

    }

    public function mostrar($id){
    //  funçao para mostrar os dossies com o id do mesmo

    $dossie = Dossie::findOrFail('1'); // onde estar o ('1') seria o ID para busca-lo, porem nao consegui colocar essa busca na view aindda.

    return view('dossies.mostrar' , ['dossie' => $dossie]);

    }

}
