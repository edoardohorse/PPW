<?php

use Faker\Generator as Faker;
use App\Collaborator as Collaborator;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Internal::class, function (Faker $faker) {
    return [
        'collaborator_id' => Collaborator::inRandomOrder()->first()->id
    ];
});
