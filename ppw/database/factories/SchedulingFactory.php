<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Scheduling::class, function (Faker $faker) {
    return [
        'giorno'=>$faker->word,
        'ora_inizio'=>$faker->time($format = 'H:i'),
        'ora_fine'=>$faker->time($format = 'H:i')
    ];
});
