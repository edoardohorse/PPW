<?php

use Faker\Generator as Faker;
use App\User as User;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Collaborator::class, function (Faker $faker) {
    return [
        'esterno'=>$faker->boolean,
        'user_id'  => User::inRandomOrder()->first()->id
    ];
});
