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
        //Questa factory permette di creare una asd e di assegnargli da  10 transazioni
        factory(App\Asd::class, 1)->create()->each(function(App\Asd $asd)
        {
            foreach(range(1, 5) as $i)
            {
                $asd->transactions()->save(factory(App\Transaction::class)->make());
            }
        });
        // Crea degli utente e per ogni utente assegna 5 transazioni
        factory(App\User::class, 1)->create()->each(function(App\User $user)
        {
            foreach(range(1, 5) as $i)
            {
                $user->transactions()->save(factory(App\Transaction::class)->make());
            }
        });

        factory(App\Provider::class, 1)->create()->each(function(App\Provider $provider)
        {
            foreach(range(1, 5) as $i)
            {
                $provider->transactions()->save(factory(App\Transaction::class)->make());
            }
        });

        factory(App\Collaborator::class, 1)->create()->each(function(App\Collaborator $collaborator)
        {
            foreach(range(1, 5) as $i)
            {
                $collaborator->transactions()->save(factory(App\Transaction::class)->make());
            }
        });
        $this->call([
           //ProviderSeeder::class,


        ]);
    }
}
