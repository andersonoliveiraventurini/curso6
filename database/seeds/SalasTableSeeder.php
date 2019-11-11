<?php

use Illuminate\Database\Seeder;

class SalasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        factory(\App\Models\Sala::class, 50)->create()->make();
    }
}
