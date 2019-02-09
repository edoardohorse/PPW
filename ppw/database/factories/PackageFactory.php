<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Package::class, function (Faker $faker) {
    return [
        'nome_pacchetto' => $faker->word,
        'prezzo' =>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL)
    ];
});
