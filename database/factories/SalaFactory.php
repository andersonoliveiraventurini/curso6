<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Sala;
use Faker\Generator as Faker;

$factory->define(Sala::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'qtdAlunos' => 40,
        'ativo' => 1,
        'projetor' => 1,
        'responsavel_id' => 1
    ];
});
