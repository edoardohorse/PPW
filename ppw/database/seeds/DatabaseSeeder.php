<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Questa factory permette di creare una asd e di assegnargli da 1 a 10 transazioni
        factory(App\Asd::class, 1)->create()->each(function(App\Asd $asd)
        {
            foreach(range(1, 10) as $i)
            {
                $asd->transactions()->save(factory(App\Transaction::class)->make());
            }
        });

    }
}
