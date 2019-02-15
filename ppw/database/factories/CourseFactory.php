<?php

use Faker\Generator as Faker;
use App\Discipline as Discipline;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Course::class, function (Faker $faker) {
    return [
        'nome_corso' => $faker->word,
        'costo_orario' => $faker->numberBetween($min=10,$max=50),
        'discipline_id' => Discipline::inRandomOrder()->first()->id
    ];
});
