<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;




$factory->define(App\aluno::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'nascimento'=> $faker->date,
        'serie' => $faker->numberBetween($min = 1, $max = 9),
        'cep'=>$faker->postcode,
        'rua' => $faker->streetName,
        'numero'=> $faker->buildingNumber,
        'complemento' => $faker->secondaryAddress, 
        'bairro' => $faker->streetAddress,
        'cidade' => $faker->city,
        'estado' => $faker->state,
        'nome_mae' => $faker->name($gender='female'),
        'data_mensalidade' => $faker->date,
        'cpf_mae' => $faker->randomNumber
    ];
});
