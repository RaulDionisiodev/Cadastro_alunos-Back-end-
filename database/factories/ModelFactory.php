<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\aluno::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'nascimento'=> $faker->date,
        'serie' => $faker->numberBetween($min = 1, $max = 9)  
    ];
});
