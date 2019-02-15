<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Card::class, function (Faker $faker) {
    return [
        'data_tesseramento' => $faker->date(),
        'scadenza_tesseramento' => $faker->date($max = now())
    ];
});
