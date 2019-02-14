<?php

use Illuminate\Database\Seeder;

class ProviderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Provider::class, 1)->create();

        $provider = new App\Provider([
            'nome'=> 'Enel',
            'ragione_sociale'=>'Enel & co',
            'indirizzo'=>'Via Liguria 12',
            'cap'=>'74121',
            'citta'=>'Taranto',
            'provincia'=>'TA',
            'tipo_fornitura'=>'Elettricità',
            'note'=>'Fornisce elettricità',
            'member_id'=> 15
        ]);
        $provider->save();

        $provider = new App\Provider([
            'nome'=> 'Eni',
            'ragione_sociale'=>'Eni & co',
            'indirizzo'=>'Via Campania 12',
            'cap'=>'74121',
            'citta'=>'Taranto',
            'provincia'=>'TA',
            'tipo_fornitura'=>'Gas',
            'note'=>'Fornisce Gas',
            'member_id'=> 16
        ]);
        $provider->save();

    }
}
