<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Scheduling::class, function (Faker $faker) {
    return [
        'giorno'=>$faker->dayOfMonth,
        'orario'=>$faker->time($format = 'H:i')
    ];
});
