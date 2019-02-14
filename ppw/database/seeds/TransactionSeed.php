<?php

use Illuminate\Database\Seeder;

class TransactionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaction = new App\Transaction([
            'modalita_pagamento' =>'Contanti',
            'descrizione' => 'Pagamento ',
            'file_fattura'=> '',
            'data'=>'2019-02-14',
            'tipo_fattura'=>'',
            'tipo_transazione'=>'uscita',
            'tipo_ricevuta'=>'fattura',
            'importo'=>'100.00',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'asd_id' => 1,
            'provider_id' => 1
            ]);
        $transaction->save();

        $transaction = new App\Transaction([
            'modalita_pagamento' =>'Contanti',
            'descrizione' => 'Pagamento ',
            'file_fattura'=> '',
            'data'=>'2019-02-14',
            'tipo_fattura'=>'',
            'tipo_transazione'=>'uscita',
            'tipo_ricevuta'=>'fattura',
            'importo'=>'500.00',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'asd_id' => 1,
            'provider_id' => 2,
        ]);
        $transaction->save();

        $transaction = new App\Transaction([
            'modalita_pagamento' =>'Contanti',
            'descrizione' => 'Pagamento ',
            'file_fattura'=> '',
            'data'=>'2019-02-14',
            'tipo_fattura'=>'',
            'tipo_transazione'=>'uscita',
            'tipo_ricevuta'=>'fattura',
            'importo'=>'50.00',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'asd_id' => 1,
            'collaborator_id' => 1,
        ]);
        $transaction->save();

        $transaction = new App\Transaction([
            'modalita_pagamento' =>'Carta di credito',
            'descrizione' => 'Pagamento ',
            'file_fattura'=> '',
            'data'=>'2019-02-14',
            'tipo_fattura'=>'',
            'tipo_transazione'=>'uscita',
            'tipo_ricevuta'=>'fattura',
            'importo'=>'50.00',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'asd_id' => 1,
            'collaborator_id' => 2,
        ]);
        $transaction->save();

        $transaction = new App\Transaction([
            'modalita_pagamento' =>'Contanti',
            'descrizione' => 'Pagamento ',
            'file_fattura'=> '',
            'data'=>'2019-02-14',
            'tipo_fattura'=>'',
            'tipo_transazione'=>'uscita',
            'tipo_ricevuta'=>'fattura',
            'importo'=>'50.00',
            'created_at' => '2019-03-12 09:03:16',
            'updated_at' => '2019-03-12 09:03:16',
            'asd_id' => 1,
            'collaborator_id' => 4,
        ]);
        $transaction->save();

        $transaction = new App\Transaction([
            'modalita_pagamento' =>'Carta di credito',
            'descrizione' => 'Pagamento ',
            'file_fattura'=> '',
            'data'=>'2019-02-14',
            'tipo_fattura'=>'',
            'tipo_transazione'=>'entrata',
            'tipo_ricevuta'=>'fattura',
            'importo'=>'150.00',
            'created_at' => '2019-03-12 09:03:16',
            'updated_at' => '2019-03-12 09:03:16',
            'asd_id' => 1,
            'user_id' => 4,
        ]);
        $transaction->save();


        $transaction = new App\Transaction([
            'modalita_pagamento' =>'Carta di credito',
            'descrizione' => 'Pagamento ',
            'file_fattura'=> '',
            'data'=>'2019-02-14',
            'tipo_fattura'=>'',
            'tipo_transazione'=>'entrata',
            'tipo_ricevuta'=>'ricevuta',
            'importo'=>'200.00',
            'created_at' => '2019-03-12 09:03:16',
            'updated_at' => '2019-03-12 09:03:16',
            'asd_id' => 1,
            'user_id' => 5,
        ]);
        $transaction->save();

        $transaction = new App\Transaction([
            'modalita_pagamento' =>'Carta di credito',
            'descrizione' => 'Pagamento ',
            'file_fattura'=> '',
            'data'=>'2019-02-14',
            'tipo_fattura'=>'',
            'tipo_transazione'=>'entrata',
            'tipo_ricevuta'=>'ricevuta',
            'importo'=>'150.00',
            'created_at' => '2019-03-12 09:03:16',
            'updated_at' => '2019-03-12 09:03:16',
            'asd_id' => 1,
            'user_id' => 10,
        ]);
        $transaction->save();


        $transaction = new App\Transaction([
            'modalita_pagamento' =>'Carta di credito',
            'descrizione' => 'Pagamento ',
            'file_fattura'=> '',
            'data'=>'2019-02-14',
            'tipo_fattura'=>'',
            'tipo_transazione'=>'entrata',
            'tipo_ricevuta'=>'fattura',
            'importo'=>'20.00',
            'created_at' => '2019-03-12 09:03:16',
            'updated_at' => '2019-03-12 09:03:16',
            'asd_id' => 1,
            'user_id' => 11,
        ]);
        $transaction->save();

    }
}
