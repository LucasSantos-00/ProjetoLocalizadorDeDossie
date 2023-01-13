<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Dossie;
use Illuminate\Support\Facades\DB;

//Controller Do Dossie

class DossieController extends Controller
{

    public function index()
    {
        // Busca por nomes , matricula , curso .

        $search = request('search');

        if ($search) {

            $dossies = DB::table('dossies')
                ->where('nome', 'like', '%' . $search . '%') // Busca por nome do aluno

                ->orwhere('matricula', 'like', '%' . $search . '%') // Busca por matricula do aluno

                ->orwhere('curso', 'like', '%' . $search . '%') // Busca por curso/sala do aluno

                ->get(); // get para obter os dados solicitados

        } else {

            $dossies = Dossie::all(); // caso a barra de pesquisa nao for preenchida mostrar todos os dados

        }

        return view('welcome', ['dossies' => $dossies, 'seaech' => $search]); // retornar a a views (COM O FILTRO APLICADO) com os dados

    }

    public function criar()
    {
        //  funçao de criar um dossie

        return view('dossies.criar');

    }

    public function store(Request $request)
    {
        //  funcao para colocar os dados no banco

        $dossie = new Dossie;

        $dossie->id = $request->id;
        $dossie->nome = $request->nome;
        $dossie->idade = $request->idade;
        $dossie->matricula = $request->matricula;
        $dossie->curso = $request->curso;
        $dossie->estante = $request->estante;
        $dossie->lado = $request->lado;

        $dossie->save();

        return redirect('/')->with('msg', 'Dossie foi registrado com sucesso!');

    }

    public function mostra($id)
    {
        //  funçao para mostrar os dossies com o id do mesmo

//        $dossie = Dossie::findOrFail('id'); // onde estar o ('1') seria o ID para busca-lo, porem nao consegui colocar essa busca na view ainda.

        // $dossieOwner = User::where('id',$dossie->user_id)->first()->toArray(); // Futura funçao para mostrar quem fez certas mudanças no app (Na base de dados dos dossies etc...)

        // Busca por nomes , matricula , curso .

        $search = request('search');

        if ($search) {

            $dossies = DB::table('dossies')
                ->where('nome', 'like', '%' . $search . '%') // Busca por nome do aluno

                ->orwhere('matricula', 'like', '%' . $search . '%') // Busca por matricula do aluno

                ->orwhere('curso', 'like', '%' . $search . '%') // Busca por curso/sala do aluno

                ->get(); // get para obter os dados solicitados

        } else {

            $dossies = Dossie::all(); // caso a barra de pesquisa nao for preenchida mostrar todos os dados

        }

        return view('dossies/mostrar', ['dossies' => $dossies, 'seaech' => $search]); // retornar a a views (COM O FILTRO APLICADO) com os dados
    }

    public function destroy($id){

        Dossie::findOrfail($id)->delete();

        return redirect('/')->with('msg', 'Dossie apagado com exido');

    }

}
