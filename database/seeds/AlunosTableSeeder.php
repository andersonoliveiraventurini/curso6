<?php

use Illuminate\Database\Seeder;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Aluno::create([
                'nome' => 'Aluno 1',
                'curso_id' => 1,
                'matricula' => 256478
        ]);
        \App\Models\Aluno::create([
                'nome' => 'Aluno 2',
                'curso_id' => 1,
                'matricula' => 3355448             
        ]);
    }
}
