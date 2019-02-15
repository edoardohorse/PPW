<?php

use Faker\Generator as Faker;
use App\Member as Member;
use App\Asd as Asd;
/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\User::class, function (Faker $faker) {
    return [
        "id"=> 1,
        "nome"=> "Edoardo",
        "cognome"=> "Cavallo",
        "cap"=> "74023",
        "indirizzo"=> "Socrate",
        "citta"=> "Grottaglie",
        "provincia"=> "TA",
        "data_nascita"=> "1997-05-11",
        "genere"=> "Maschio",
        "tipo"=> 'fondatore',
        "member_id"=> 1,
        "created_at"=> "2019-02-11 09:03:16",
        "updated_at"=> "2019-02-11 09:03:16",
    ];
});
