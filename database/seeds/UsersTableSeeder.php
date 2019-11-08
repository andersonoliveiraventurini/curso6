<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fulano 1',
            'password' => bcrypt('12345'),
            'email' => 'teste@gmail.com'
        ]);

        User::create([
            'name' => 'Fulano 2',
            'password' => bcrypt('12345'),
            'email' => 'teste2@gmail.com'
        ]);

        User::create([
            'name' => 'Fulano 3',
            'password' => bcrypt('12345'),
            'email' => 'teste3@gmail.com'
        ]);
    }
}
