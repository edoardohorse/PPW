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



        "id" => 1,
        "email" => "email@prova.it",
        "email_verified_at" => null,
        "password" => '$2y$10$LCkWZozXtkppYtMLD1iUfOksjO9CM22HFkeKo.Yo3pHcNfgKR07dK',
        "remember_token" => null,
        "created_at" => "2019-02-11 09:03:16",
        "updated_at" => "2019-02-11 09:03:16",

    ];
});
