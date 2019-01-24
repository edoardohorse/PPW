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

        factory(App\Provider::class, 10)->create()->each(function(App\Provider $provider)
        {

            foreach(range(1, 5) as $i)
            {
                $provider->transaction()->save(factory(App\Transaction::class)->make());

            }
        });
    }
}
