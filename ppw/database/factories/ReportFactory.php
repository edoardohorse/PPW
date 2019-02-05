<?php

use Faker\Generator as Faker;
use App\Asd as Asd;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Report::class, function (Faker $faker) {
    return [
        'descrizione'=>$faker->text,
        'data'=>$faker->date($min = now()),
        'link'=>$faker->imageUrl($width = 640, $height = 480),
        'asd_id'=> Asd::inRandomOrder()->first()->id
    ];
});
