<?php

use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Curso::create([
            'nome' => 'Curso 1'
    ]);
    \App\Models\Curso::create([
            'nome' => 'Aluno 2'            
    ]);
    }
}
