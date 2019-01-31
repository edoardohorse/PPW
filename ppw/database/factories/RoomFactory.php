<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'nome'=>$faker->word
    ];
});
