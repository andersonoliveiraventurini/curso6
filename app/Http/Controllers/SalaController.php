<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use DB;

class SalaController extends Controller
{
    public function index()
    {
        //$salas = Sala::paginate(10);
        //$salas = DB::table('salas')->get();
        
        //PLUCK
        $salas = Sala::where('qtdAlunos','>',0)->paginate(10);
        //dd($salas);

        //CHUNK
        /*$salas = DB::table('salas')->where('qtdAlunos',20)->orderBy('id')->chunk(2, function($salas){
            dump($salas);
        });        
        
        dd($salas);*/
        //SELECT * FROM salas where qtdAlunos=20 or limit 1

        // return view('home')->with('salasPrincipais', $salas);
        
        // passa a variável salas para a view
        // através de compact
        return view('sala.index', compact('salas'));
    }

    public function scope(){

        //$salas = Sala::TemAlunos()->paginate(10);
        //dd( Sala::where('qtdalunos',1)->doesntExist());


        //SELECT
        // nome, qtadalunos as QUANTIDADE from salas where (qtdalunos>0 and qtdAlunos <10) or
        // qtdalunos =50
        /*dd(DB::table('salas')->select('id','nome', 'qtdalunos as Quantidade')->where([
            ['qtdAlunos','>',0], ['qtdAlunos','<',10]
        ])->orWhere('nome', 'LIKE', 'Dr.%')->get());*/


        //INSERT 
        DB::table('salas')->insertGetId([
            'nome'=>'Dr. Educorp 2',
            'qtdAlunos' => 15,
            'projetor'=> 1,
            'ativo'=>0,
            'usuario_id'=>1
        ]);

        //UPDATE
        /*dd(DB::table('salas')->where('id',102)->update([
            'nome'=>'Dr. Educorp 2'
        ]));*/

        //UPDATEORINSERT
        /*dd(DB::table('salas')->updateOrInsert(
            ['id'=> 102],
            ['nome'=>'Dr. Educorp 3',
            'qtdAlunos' => 150,
            'projetor'=> 1,
            'ativo'=>1,
            'usuario_id'=>1
        ]));*/

        //DELETE
        //dd(DB::table('salas')->where('id',101)->delete());
        
       // dd(DB::table('salas')->truncate());
        
        


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

        $this->authorize('create', Sala::class);

        Sala::create($request->except('_token'));

        return redirect('salas');
    }

    public function show(Sala $sala)
    {
        //$sala = Sala::findOrFail($sala);
        return view('sala.show', compact('sala'));
    }

    public function edit(Sala $sala)
    {
        return view('sala.edit', compact('sala'));
    }

    public function update(Request $request, Sala $sala)
    {
        $sala->update($request->except('_token'));

        return redirect('salas/'.$sala->id);
    }

    public function destroy(Sala $sala)
    {
        $this->authorize('delete', $sala);

        $sala->delete();

        return redirect('salas');
    }

    function seed(){
        \Artisan::call('db:seed',[
            '--class' => 'SalasTableSeeder',
            '--force' => true
        ]);

        return redirect()->route('salas.indice');
    }
}
