<?php

use Faker\Generator as Faker;
use App\Member as Member;
use App\Asd as Asd;
/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'nome'=>$faker->name,
        'cognome'=>$faker->lastName,
        'cap'=>$faker->postcode,
        'indirizzo'=>$faker->address,
        'citta'=>$faker->city,
        'provincia'=>$faker->word,
        'data_nascita'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'genere'=>$faker->randomElement($array = array ('male','female')),
        'tipo'=>$faker->word,
        'member_id' => Member::inRandomOrder()->first()->id,
        'asd_id' => Asd::inRandomOrder()->first()->id
    ];
});
