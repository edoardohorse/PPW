<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */


$factory->define(App\UserSite::class, function (Faker $faker) {
    return [
        'email'             => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'name'              => $faker->name,
        'surname'           => $faker->lastname,
        'type'              => $faker->randomElement(["collab","sociof"]),
        'password'          => 'prova', // secret
        'remember_token'    => str_random(10),
    ];
});
