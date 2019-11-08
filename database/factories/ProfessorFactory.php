<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Professor;
use Faker\Generator as Faker;

$factory->define(Professor::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'matricula' => 00001
    ];
});
