<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    public function index()
    {
        $salas = Sala::all();
        // return view('home')->with('salasPrincipais', $salas);
        
        // passa a variável salas para a view
        // através de compact
        return view('sala.index', compact('salas'));
    }

    public function create()
    {
        return view('sala.create');
    }

    public function store(Request $request)
    {
        /*$sala = new Sala();
        $sala->nome = $_REQUEST['nome'];
        $sala->qtdAlunos = $_REQUEST['qtdAlunos'];
        $sala->save();*/

        //dd($_REQUEST);

        Sala::create($request->except('_token'));

        return redirect('salas');
    }

    public function show(Sala $sala)
    {
        return view('sala.show', compact('sala'));
    }
}
