<?php

use Faker\Generator as Faker;
use App\Member as Member;
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

        'password' => 'provaprova', // secret
        'email'=>$faker->email,
        'email_verified_at' => now(),
        'remember_token' => str_random(10),
//        'member_id' => Member::inRandomOrder()->first()->id
    ];
});
