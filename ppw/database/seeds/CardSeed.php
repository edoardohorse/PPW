<?php

use Illuminate\Database\Seeder;

class CardSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $card = new App\Card([
            'data_tesseramento' => '2019-07-09',
            'scadenza_tesseramento' => '2020-07-09',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => '1'
        ]);
        $card->save();

        $card = new App\Card([
            'data_tesseramento' => '2019-01-10',
            'scadenza_tesseramento' => '2020-07-09',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => '2'
        ]);
        $card->save();

        $card = new App\Card([
            'data_tesseramento' => '2019-05-09',
            'scadenza_tesseramento' => '2020-05-09',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => '3'
        ]);
        $card->save();


        $card = new App\Card([
            'data_tesseramento' => '2019-06-19',
            'scadenza_tesseramento' => '2020-06-19',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => '4'
        ]);
        $card->save();

        $card = new App\Card([
            'data_tesseramento' => '2019-03-09',
            'scadenza_tesseramento' => '2020-03-09',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => '5'
        ]);
        $card->save();

        $card = new App\Card([
            'data_tesseramento' => '2019-07-19',
            'scadenza_tesseramento' => '2020-07-19',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => '6'
        ]);
        $card->save();

        $card = new App\Card([
            'data_tesseramento' => '2019-04-19',
            'scadenza_tesseramento' => '2020-04-19',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => '7'
        ]);
        $card->save();

        $card = new App\Card([
            'data_tesseramento' => '2019-12-19',
            'scadenza_tesseramento' => '2020-12-19',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => '8'
        ]);
        $card->save();

        $card = new App\Card([
            'data_tesseramento' => '2019-11-19',
            'scadenza_tesseramento' => '2020-11-19',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => '9'
        ]);
        $card->save();

        $card = new App\Card([
            'data_tesseramento' => '2019-04-21',
            'scadenza_tesseramento' => '2020-12-21',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => '10'
        ]);
        $card->save();

        $card = new App\Card([
            'data_tesseramento' => '2019-08-19',
            'scadenza_tesseramento' => '2020-08-19',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => '11'
        ]);
        $card->save();

        $card = new App\Card([
            'data_tesseramento' => '2019-12-19',
            'scadenza_tesseramento' => '2020-12-19',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => '12'
        ]);
        $card->save();

        $card = new App\Card([
            'data_tesseramento' => '2019-02-22',
            'scadenza_tesseramento' => '2020-02-2',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => '13'
        ]);
        $card->save();
    }
}
