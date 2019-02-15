<?php

use Illuminate\Database\Seeder;

class MemberSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Member::class, 1)->create();
        $member = new App\Member([
        'cod_fiscale' => 'CVLDRD97E11E205A',
        'numero_cell' => '3926043814',
        'numero_tel' => '0995610254',
        'data_stipula_ass' => '2019-02-21',
        'scadenza_ass' => '2020-02-21',
        'numero_ass' => '123',
        'data_cert_medico' => '2020-02-22',
        'scadenza_cert_med' => '2020-02-22',
        'note' => 'Iscrizione membero',
        'p_iva' => '12345678910',
        'created_at' => '2019-02-11 09:03:16',
        'updated_at' => '2019-02-11 09:03:16',
         "user_site_id" => 1,
       ]);
        $member->save();
        $member->asd()->attach(1);

        $member = new App\Member([
            'cod_fiscale' => 'DCF3F4GT56HG5F4R',
            'numero_cell' => '349014587',
            'numero_tel' => '0934611254',
            'data_stipula_ass' => '2019-02-17',
            'scadenza_ass' => '2020-02-17',
            'numero_ass' => '345',
            'data_cert_medico' => '2019-03-22',
            'scadenza_cert_med' => '2020-03-23',
            'note' => 'Iscrizione membro',
            'p_iva' => '11345678910',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            "user_site_id" => 2,
        ]);
        $member->save();
        $member->asd()->attach(1);

        $member = new App\Member([
            'cod_fiscale' => 'CCD344GG56HG5F4R',
            'numero_cell' => '390145870',
            'numero_tel' => '0234611254',
            'data_stipula_ass' => '2019-03-10',
            'scadenza_ass' => '2020-03-10',
            'numero_ass' => '34567',
            'data_cert_medico' => '2019-05-22',
            'scadenza_cert_med' => '2020-05-22',
            'note' => 'Iscrizione membro',
            'p_iva' => '10935578910',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            "user_site_id" => 3,
        ]);
        $member->save();
        $member->asd()->attach(1);

        $member = new App\Member([
            'cod_fiscale' => 'ABRW44CG56HG5F4R',
            'numero_cell' => '3807758704',
            'numero_tel' => '0124641254',
            'data_stipula_ass' => '2019-04-10',
            'scadenza_ass' => '2020-04-10',
            'numero_ass' => '87567',
            'data_cert_medico' => '2019-08-22',
            'scadenza_cert_med' => '2020-08-22',
            'note' => 'Iscrizione membro',
            'p_iva' => '12945578910',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
        ]);
        $member->save();
        $member->asd()->attach(1);

        $member = new App\Member([
            'cod_fiscale' => 'ABD344GY56IG5F4R',
            'numero_cell' => '3820145870',
            'numero_tel' => '1334561254',
            'data_stipula_ass' => '2019-01-10',
            'scadenza_ass' => '2020-01-10',
            'numero_ass' => '567',
            'data_cert_medico' => '2019-09-22',
            'scadenza_cert_med' => '2020-09-22',
            'note' => 'Iscrizione membro',
            'p_iva' => '78242538910',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
        ]);
        $member->save();
        $member->asd()->attach(1);

        $member = new App\Member([
            'cod_fiscale' => 'CDD341GY57IGFF4R',
            'numero_cell' => '3807737454',
            'numero_tel' => '0234561254',
            'data_stipula_ass' => '2019-01-13',
            'scadenza_ass' => '2020-01-13',
            'numero_ass' => '789',
            'data_cert_medico' => '2019-08-10',
            'scadenza_cert_med' => '2020-09-10',
            'note' => 'Iscrizione membro',
            'p_iva' => '13742538910',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
        ]);
        $member->save();
        $member->asd()->attach(1);


        $member = new App\Member([
            'cod_fiscale' => 'BFDE41GY57IGFF4R',
            'numero_cell' => '3491454869',
            'numero_tel' => '5231563254',
            'data_stipula_ass' => '2019-09-13',
            'scadenza_ass' => '2020-09-13',
            'numero_ass' => '34789',
            'data_cert_medico' => '2019-04-10',
            'scadenza_cert_med' => '2020-04-10',
            'note' => 'Iscrizione membro',
            'p_iva' => '42142538910',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
        ]);
        $member->save();
        $member->asd()->attach(1);

        $member = new App\Member([
            'cod_fiscale' => 'TR3FGFJK57IGFF4R',
            'numero_cell' => '3891454869',
            'numero_tel' => '1356563254',
            'data_stipula_ass' => '2019-10-13',
            'scadenza_ass' => '2020-10-13',
            'numero_ass' => '778989',
            'data_cert_medico' => '2019-11-10',
            'scadenza_cert_med' => '2020-11-10',
            'note' => 'Iscrizione membro',
            'p_iva' => '44242538910',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
        ]);
        $member->save();
        $member->asd()->attach(1);


        $member = new App\Member([
            'cod_fiscale' => 'RCVFGFJK57IGFF4R',
            'numero_cell' => '3693454869',
            'numero_tel' => '1246563254',
            'data_stipula_ass' => '2019-12-13',
            'scadenza_ass' => '2020-12-13',
            'numero_ass' => '77789',
            'data_cert_medico' => '2019-10-10',
            'scadenza_cert_med' => '2020-10-10',
            'note' => 'Iscrizione membro',
            'p_iva' => '19022538910',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
        ]);
        $member->save();
        $member->asd()->attach(1);

        $member = new App\Member([
            'cod_fiscale' => 'BHT453JK57IGFF4R',
            'numero_cell' => '3807767432',
            'numero_tel' => '0134563254',
            'data_stipula_ass' => '2019-01-15',
            'scadenza_ass' => '2020-01-15',
            'numero_ass' => '712389',
            'data_cert_medico' => '2019-11-17',
            'scadenza_cert_med' => '2020-11-17',
            'note' => 'Iscrizione membro',
            'p_iva' => '18942538910',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
        ]);
        $member->save();
        $member->asd()->attach(1);

        $member = new App\Member([
            'cod_fiscale' => 'FUI3DFGK57IGFF4R',
            'numero_cell' => '3897767432',
            'numero_tel' => '0678863254',
            'data_stipula_ass' => '2019-03-15',
            'scadenza_ass' => '2020-03-15',
            'numero_ass' => '712389',
            'data_cert_medico' => '2019-09-17',
            'scadenza_cert_med' => '2020-09-17',
            'note' => 'Iscrizione membro',
            'p_iva' => '14242538910',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
        ]);
        $member->save();
        $member->asd()->attach(1);

        $member = new App\Member([
            'cod_fiscale' => 'GHJ3DFGK57IGFF4R',
            'numero_cell' => '3697767432',
            'numero_tel' => '1246763254',
            'data_stipula_ass' => '2019-07-15',
            'scadenza_ass' => '2020-07-15',
            'numero_ass' => '712389',
            'data_cert_medico' => '2019-01-17',
            'scadenza_cert_med' => '2020-01-17',
            'note' => 'Iscrizione membro',
            'p_iva' => '11242538910',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
        ]);
        $member->save();
        $member->asd()->attach(1);

        $member = new App\Member([
            'cod_fiscale' => 'LE3GDFGK57IGFF4R',
            'numero_cell' => '3997767432',
            'numero_tel' => '7321763254',
            'data_stipula_ass' => '2019-08-15',
            'scadenza_ass' => '2020-08-15',
            'numero_ass' => '132389',
            'data_cert_medico' => '2019-04-25',
            'scadenza_cert_med' => '2020-04-25',
            'note' => 'Iscrizione membro',
            'p_iva' => '01242538910',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
        ]);
        $member->save();
        $member->asd()->attach(1);


        $member = new App\Member([
            'cod_fiscale' => 'ART4GFGK57IGFF4R',
            'numero_cell' => '3801247432',
            'numero_tel' => '2341893254',
            'data_stipula_ass' => '2019-12-15',
            'scadenza_ass' => '2020-12-15',
            'numero_ass' => '172389',
            'data_cert_medico' => '2019-05-25',
            'scadenza_cert_med' => '2020-05-25',
            'note' => 'Iscrizione membro',
            'p_iva' => '19097538910',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
        ]);
        $member->save();
        $member->asd()->attach(1);


        $member = new App\Member([
            'cod_fiscale' => 'BFTS3FGK57IGFF4R',
            'numero_cell' => '3901247432',
            'numero_tel' => '1091893254',
            'data_stipula_ass' => '2019-06-15',
            'scadenza_ass' => '2020-06-15',
            'numero_ass' => '763229',
            'data_cert_medico' => '2019-05-04',
            'scadenza_cert_med' => '2020-05-04',
            'note' => 'Iscrizione membro',
            'p_iva' => '19097538910',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_site_id' => 4
        ]);
        $member->save();
        $member->asd()->attach(1);


        $member = new App\Member([
            'cod_fiscale' => 'OPY56GS457IGFF4R',
            'numero_cell' => '3963447432',
            'numero_tel' => '4191893254',
            'data_stipula_ass' => '2019-07-09',
            'scadenza_ass' => '2020-07-09',
            'numero_ass' => '763229',
            'data_cert_medico' => '2019-05-04',
            'scadenza_cert_med' => '2020-05-04',
            'note' => 'Iscrizione membro',
            'p_iva' => '19097538910',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_site_id' => 5
        ]);
        $member->save();
        $member->asd()->attach(1);

        $member = new App\Member([
            'cod_fiscale' => 'HGRDESAR57IGFF4R',
            'numero_cell' => '3861247432',
            'data_stipula_ass' => '2019-10-09',
            'scadenza_ass' => '2020-10-09',
            'numero_ass' => '163229',
            'data_cert_medico' => '2019-12-04',
            'scadenza_cert_med' => '2020-12-04',
            'note' => 'Iscrizione membro',
            'p_iva' => '60097538910',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
        ]);
        $member->save();
        $member->asd()->attach(1);

        $member = new App\Member([
            'cod_fiscale' => 'AFRDESAR57IGFF4R',
            'numero_cell' => '32961247432',
            'data_stipula_ass' => '2019-11-19',
            'scadenza_ass' => '2020-11-19',
            'numero_ass' => '101229',
            'data_cert_medico' => '2019-11-04',
            'scadenza_cert_med' => '2020-11-04',
            'note' => 'Iscrizione membro',
            'p_iva' => '60097538910',
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
        ]);
        $member->save();
        $member->asd()->attach(1);



    }
}
