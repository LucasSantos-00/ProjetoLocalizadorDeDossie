<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dossie;

//Controller Do Dossie

class DossieController extends Controller
{

    public function index(){

        $dossies = Dossie::all();

        return view('welcome', ['dossies' => $dossies ]);

    }

    public function criar(){

        return view('dossies.criar');

    }

    public function store(Request $request){

    $dossie = new Dossie;

    $dossie-> id = $request->id;
    $dossie-> nome = $request->nome;
    $dossie-> idade = $request->idade;
    $dossie-> matricula = $request->matricula;
    $dossie-> curso = $request->curso;
    $dossie-> estante = $request->estante;
    $dossie-> lado = $request->lado;


    $dossie -> save();


    return redirect('/');

    }


}

