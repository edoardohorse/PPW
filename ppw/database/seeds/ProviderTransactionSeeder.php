<?php

use Illuminate\Database\Seeder;

class ProviderTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Provider::class, 1)->create()->each(function(App\Provider $provider)
        {
            foreach(range(1, 5) as $i)
            {
                $provider->transactions()->save(factory(App\Transaction::class)->make());
            }
        });

    }
}
