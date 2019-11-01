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
    }
}
