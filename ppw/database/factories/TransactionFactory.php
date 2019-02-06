<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */


$factory->define(App\Transaction::class, function (Faker $faker) {
    return [

        'modalita_pagamento' =>$faker->creditCardType,
        'descrizione' =>$faker->realText(),
        'file_fattura'=>$faker->imageUrl($width = 640, $height = 480),
        'data'=>$faker->dateTime,
        'tipo_fattura'=>$faker->word,
        'tipo_transazione'=>$faker->word,
        'tipo_ricevuta'=>$faker->word,
        'importo'=>$faker->randomFloat($nbMaxDecimals = NULL, $min = 1, $max = NULL),

    ];
});
