<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Sala;
use Faker\Generator as Faker;

$factory->define(Sala::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'qtdAlunos' => rand(0,50),
        'ativo' => rand(0,1),
        'projetor' => rand(0,1),
        'usuario_id' => 1
    ];
});
