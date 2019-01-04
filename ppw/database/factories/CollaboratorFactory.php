<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Collaborator::class, function (Faker $faker) {
    return [
        'tipo'=>$faker->boolean
    ];
});
