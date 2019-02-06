<?php

use Faker\Generator as Faker;
use App\Report as Report;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Asd::class, function (Faker $faker) {
    return [
        'nome'=>$faker->name,
        'logo'=>$faker->imageUrl($width = 200, $height = 200),
        'numero_tel'=>$faker->phoneNumber,
        'indirizzo'=>$faker->address,
        'citta'=>$faker->city,
        'fax'=>$faker->numberBetween($min = 100000, $max = 999999),
        'email'=>$faker->companyEmail,
        'cod_fiscale'=>$faker->iban(),
        'p_iva'=>$faker->numberBetween($min = 10000000, $max = 99999999),
        'cap'=>$faker->postcode,
        'provincia'=>$faker->word,


    ];
});
