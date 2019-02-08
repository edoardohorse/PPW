<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Member::class, function (Faker $faker) {
    return [
        'cod_fiscale'=>$faker->iban(),
        'numero_cell'=>$faker->phoneNumber,
        'numero_tel'=>$faker->phoneNumber,
        'data_stipula_ass'=>$faker->date($min=now()),
        'scadenza_ass'=>$faker->date($min=now()),
        'numero_ass'=>$faker->randomNumber($nbDigits = NULL, $strict = false),
        'data_cert_medico'=>$faker->date($min=now()),
        'scadenza_cert_med'=>$faker->date($min=now()),
        'ruolo'=>'seg',
        'note'=>$faker->realText(),
        'p_iva'=>$faker->numberBetween($min = 10000000, $max = 99999999)
    ];
});
