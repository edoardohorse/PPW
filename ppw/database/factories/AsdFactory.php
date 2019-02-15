<?php

use Faker\Generator as Faker;
use App\Report as Report;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Asd::class, function (Faker $faker) {
    return [
        'nome'=>'Peka ASD',
        'logo'=> $faker->imageUrl($width = 200, $height = 200),
        'numero_tel'=>'023564976',
        'indirizzo'=>'Via Simeana 180',
        'citta'=>'Francavilla Fontana',
        'fax'=>$faker->numberBetween($min = 100000, $max = 999999),
        'email'=>'peka@email.it',
        'cod_fiscale'=>'ME34FR56HY60F945',
        'p_iva'=>$faker->numberBetween($min = 10000000, $max = 99999999),
        'cap'=> '72021',
        'provincia'=>'Brindisi',


    ];
});
