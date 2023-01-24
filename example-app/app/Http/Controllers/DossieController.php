<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Dossie;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Echo_;
use function GuzzleHttp\Promise\all;

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

            return view('/dossies/criar');

        }

        return view('/dossies/mostrar', ['dossies' => $dossies, 'seaech' => $search]); // retornar a a views (COM O FILTRO APLICADO) com os dados

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
        $dossie->turma = $request->turma;
        $dossie->estante = $request->estante;
        $dossie->lado = $request->lado;
        $dossie->save();

        return redirect('/')->with('msg', 'Dossie foi registrado com sucesso!');

    }

    public function criarTurma()
    {
        //  rota para a view de criar turmas q possibilita a criaçao de turmas no banco de dados

        return view('turmas.criar');

    }

    public function criarTurmas(Request $request)
    {
        //  funcao para criar turmas no banco

        $turmas = new Turma;

        $turmas->nomeCurso = $request->nomeCurso;

        $turmas->save();

        return view('/turmas/criar', ['turma' => $turmas]);

    }

    public function mostra()
    {

        $search = request('search');

        if ($search) {

            $dossies = DB::table('dossies')

                ->where('nome', 'like', '%' . $search . '%') // Busca por nome do aluno

                ->orwhere('matricula', 'like', '%' . $search . '%') // Busca por matricula do aluno

                ->orwhere('curso', 'like', '%' . $search . '%') // Busca por curso/sala do aluno

                ->orwhere('turma', 'like', '%' . $search . '%') // Busca por curso/sala do aluno

                ->get(); // get para obter os dados solicitados

        } else {

            $dossies = Dossie::all(); // caso a barra de pesquisa nao for preenchida mostrar todos os dados

        }

        if ($search = "DDS-3/11") {

            $dossies = DB::table('dossies')
                ->where('turma',  'like', '%' . $search . '%')->get();

        }elseif ($search = "AUI"){

            $dossies = DB::table('dossies')
                ->where('turma',  'like', '%' . $search . '%')->get();

        }

        return view('/dossies/mostrar', ['dossies' => $dossies, 'seaech' => $search]); // retornar a a views (COM O FILTRO APLICADO) com os dados
    }


    public function mostrarTurma()
    {
        $search = request('search');

        if ($search = "DDS") {

            $dossies = DB::table('dossies')
                ->where('turma',  'like', '%' . $search . '%')->get();

        } else {

             $dossies = Dossie::all(); // caso a barra de pesquisa nao for preenchida mostrar todos os dados
        }

        return view('/turmas/mostrar', ['dossies' => $dossies, 'search' => $search]);

    }

    public function mostrarErro(){

        return view('/turmas/erro');

    }

    public function mostrarPerfil(){

        return view('/dossies/perfil');
    }

    public function destroy($id)
    {
        Dossie::findOrfail($id)->delete();

        return redirect('/')->with('msg', 'Dossie apagado com exido');

    }



}
