<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User([
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
        ]);
        $user->save();

        $user = new App\User([
            "nome"=> "Christian",
            "cognome"=> "Meo",
            "cap"=> "72023",
            "indirizzo"=> "Simeana",
            "citta"=> "Francavilla Fontana",
            "provincia"=> "BR",
            "data_nascita"=> "1997-12-19",
            "genere"=> "Maschio",
            "tipo"=> 'fondatore',
            "member_id"=> 2,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();

        $user = new App\User([
            "nome"=> "Andrea ",
            "cognome"=> "Mannavola",
            "cap"=> "73121",
            "indirizzo"=> "Via Liguria 3",
            "citta"=> "Taranto",
            "provincia"=> "TA",
            "data_nascita"=> "1991-07-28",
            "genere"=> "Maschio",
            "tipo"=> 'fondatore',
            "member_id"=> 3,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();

        $user = new App\User([
            "nome"=> "Andrea ",
            "cognome"=> "Carbone",
            "cap"=> "72024",
            "indirizzo"=> "Via Manna 3",
            "citta"=> "Oria",
            "provincia"=> "BR",
            "data_nascita"=> "1997-07-23",
            "genere"=> "Maschio",
            "tipo"=> 'allievo',
            "member_id"=> 4,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();


        $user = new App\User([
            "nome"=> "Francesco ",
            "cognome"=> "Sternativo",
            "cap"=> "72021",
            "indirizzo"=> "Via Napoli 3",
            "citta"=> "Francavilla Fontana",
            "provincia"=> "BR",
            "data_nascita"=> "1997-12-14",
            "genere"=> "Maschio",
            "tipo"=> 'allievo',
            "member_id"=> 5,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();

        $user = new App\User([
            "nome"=> "Giuseppe",
            "cognome"=> "Rossi",
            "cap"=> "73024",
            "indirizzo"=> "Via Brescia 12",
            "citta"=> "Napoli",
            "provincia"=> "NA",
            "data_nascita"=> "1993-07-21",
            "genere"=> "Maschio",
            "tipo"=> 'allievo',
            "member_id"=> 6,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();

        $user = new App\User([
            "nome"=> "Emanuela",
            "cognome"=> "Rossini",
            "cap"=> "72021",
            "indirizzo"=> "Via Salonna 112",
            "citta"=> "Palermo",
            "provincia"=> "PA",
            "data_nascita"=> "1997-12-21",
            "genere"=> "Femmina",
            "tipo"=> 'allievo',
            "member_id"=> 7,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();


        $user = new App\User([
            "nome"=> "Giuseppe",
            "cognome"=> "Rossini",
            "cap"=> "72021",
            "indirizzo"=> "Via Talona 24",
            "citta"=> "Brindisi",
            "provincia"=> "BR",
            "data_nascita"=> "1997-08-05",
            "genere"=> "Maschio",
            "tipo"=> 'allievo',
            "member_id"=> 8,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();


        $user = new App\User([
            "nome"=> "Andrea",
            "cognome"=> "Passiatore",
            "cap"=> "72021",
            "indirizzo"=> "Via Mogano 21",
            "citta"=> "Francavilla Fontana",
            "provincia"=> "BR",
            "data_nascita"=> "1997-08-09",
            "genere"=> "Maschio",
            "tipo"=> 'allievo',
            "member_id"=> 9,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();


        $user = new App\User([
            "nome"=> "Mattia",
            "cognome"=> "Malitesta",
            "cap"=> "72027",
            "indirizzo"=> "Via Passaro 211",
            "citta"=> "Francavilla Fontana",
            "provincia"=> "BR",
            "data_nascita"=> "1997-05-12",
            "genere"=> "Maschio",
            "tipo"=> 'allievo',
            "member_id"=> 10,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();

        $user = new App\User([
            "nome"=> "Gianluca",
            "cognome"=> "Santoro",
            "cap"=> "72021",
            "indirizzo"=> "Via Regina Elena 23",
            "citta"=> "Francavilla Fontana",
            "provincia"=> "BR",
            "data_nascita"=> "1992-08-09",
            "genere"=> "Maschio",
            "tipo"=> 'allievo',
            "member_id"=> 10,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();

        $user = new App\User([
            "nome"=> "Giulia",
            "cognome"=> "Marchesa",
            "cap"=> "72021",
            "indirizzo"=> "Via Capitano Di Castri 43",
            "citta"=> "Francavilla Fontana",
            "provincia"=> "BR",
            "data_nascita"=> "1994-08-09",
            "genere"=> "Maschio",
            "tipo"=> 'allievo',
            "member_id"=> 11,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();

        $user = new App\User([
            "nome"=> "Giulia",
            "cognome"=> "Termoli",
            "cap"=> "72021",
            "indirizzo"=> "Via Simeana 177/A",
            "citta"=> "Francavilla Fontana",
            "provincia"=> "BR",
            "data_nascita"=> "1997-09-03",
            "genere"=> "Femmina",
            "member_id"=> 12,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();

        $user = new App\User([
            "nome"=> "Sasha",
            "cognome"=> "Grigia",
            "cap"=> "72021",
            "indirizzo"=> "Via Capitano Di Castri 43",
            "citta"=> "Francavilla Fontana",
            "provincia"=> "BR",
            "data_nascita"=> "1990-12-23",
            "genere"=> "Femmina",
            "member_id"=> 13,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();

        $user = new App\User([
            "nome"=> "Giovanni",
            "cognome"=> "Nacci",
            "cap"=> "72021",
            "indirizzo"=> "Via Di Vagno 43",
            "citta"=> "Francavilla Fontana",
            "provincia"=> "BR",
            "data_nascita"=> "1996-12-23",
            "genere"=> "Maschio",
            "member_id"=> 14,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();


        $user = new App\User([
            "nome"=> "Francesco",
            "cognome"=> "Urlo",
            "cap"=> "72021",
            "indirizzo"=> "Via Tarlo 43",
            "citta"=> "Francavilla Fontana",
            "provincia"=> "BR",
            "data_nascita"=> "1996-12-23",
            "genere"=> "Maschio",
            "member_id"=> 15,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();

        $user = new App\User([
            "nome"=> "Domenico",
            "cognome"=> "Maggio",
            "cap"=> "72021",
            "indirizzo"=> "Via San Francesco 40",
            "citta"=> "Francavilla Fontana",
            "provincia"=> "BR",
            "data_nascita"=> "1996-12-23",
            "genere"=> "Maschio",
            "member_id"=> 16,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();


        $user = new App\User([
            "nome"=> "Gianluca",
            "cognome"=> "Mattei",
            "cap"=> "72021",
            "indirizzo"=> "Via San Francesco 57",
            "citta"=> "Francavilla Fontana",
            "provincia"=> "BR",
            "data_nascita"=> "1996-12-23",
            "genere"=> "Maschio",
            "member_id"=> 17,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();


        $user = new App\User([
            "nome"=> "Andrea",
            "cognome"=> "Meo",
            "cap"=> "72021",
            "indirizzo"=> "Via Simeana 57",
            "citta"=> "Francavilla Fontana",
            "provincia"=> "BR",
            "data_nascita"=> "1996-12-23",
            "genere"=> "Maschio",
            "member_id"=> 18,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();

        $user = new App\User([
            "nome"=> "Giovanna",
            "cognome"=> "Sarli",
            "cap"=> "72021",
            "indirizzo"=> "Via Madona delle grazie 157",
            "citta"=> "Francavilla Fontana",
            "provincia"=> "BR",
            "data_nascita"=> "1991-10-23",
            "genere"=> "Femmina",
            "member_id"=> 19,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();


        $user = new App\User([
            "nome"=> "Euprepio",
            "cognome"=> "Di Noi",
            "cap"=> "72021",
            "indirizzo"=> "Via Mandala 57",
            "citta"=> "Francavilla Fontana",
            "provincia"=> "BR",
            "data_nascita"=> "1996-12-23",
            "genere"=> "Maschio",
            "member_id"=> 20,
            "created_at"=> "2019-02-11 09:03:16",
            "updated_at"=> "2019-02-11 09:03:16",
        ]);
        $user->save();

    }
}
