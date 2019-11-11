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
}
