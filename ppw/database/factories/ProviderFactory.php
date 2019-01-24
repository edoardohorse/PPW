<?php

use Faker\Generator as Faker;
use App\Member as Member;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Provider::class, function (Faker $faker) {
    return [
        'nome'=>$faker->name,
        'ragione_sociale'=>$faker->word,
        'indirizzo'=>$faker->address,
        'cap'=>$faker->postcode,
        'citta'=>$faker->city,
        'provincia'=>$faker->word,
        'tipo_fornitura'=>$faker->word,
        'note'=>$faker->text,
        'member_id'=> Member::inRandomOrder()->first()->id
    ];


});
