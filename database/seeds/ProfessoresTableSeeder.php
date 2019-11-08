<?php

use Illuminate\Database\Seeder;
use App\Models\Professor;

class ProfessoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Professor::create([
            'nome' => 'José Alcides',
            'matricula' => 123654
        ]);

        factory(Professor::class, 50)->create()->make();
    }
}
