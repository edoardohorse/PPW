<?php

use Faker\Generator as Faker;
use App\Collaborator as Collaborator;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Teacher::class, function (Faker $faker) {
    return [
        'stagista' => $faker->boolean,
        'collaborator_id' => Collaborator::inRandomOrder()->first()->id
    ];
});
