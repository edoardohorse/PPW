<?php

use Faker\Generator as Faker;
use App\User as User;


/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\TaxData::class, function (Faker $faker) {
    return [
        'numero_documento' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'tipo_abbonamento' => $faker->word,
        'user_id' =>  User::inRandomOrder()->first()->id
    ];
});
