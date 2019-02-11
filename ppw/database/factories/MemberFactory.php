<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Member::class, function (Faker $faker) {
    return [
        "id" => 1,
        "cod_fiscale" => "CVLDRD97E11E205A",
        "numero_cell" => "3926043814",
        "numero_tel" => "0995610254",
        "data_stipula_ass" => "2019-02-15",
        "scadenza_ass" => "2019-02-16",
        "numero_ass" => 123,
        "data_cert_medico" => "2019-02-22",
        "scadenza_cert_med" => "2019-02-23",
        "ruolo" => "fond",
        "note" => "note",
        "p_iva" => "12345678910",
        "created_at" => "2019-02-11 09:03:16",
        "updated_at" => "2019-02-11 09:03:16",
        "user_site_id" => 1,
    ];
});
