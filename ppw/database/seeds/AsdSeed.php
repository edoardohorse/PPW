<?php

use Illuminate\Database\Seeder;

class AsdSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Asd::class, 1)->create()->each(function(App\Asd $asd)
        {
            foreach(range(1, 5) as $i)
            {
                $asd->transaction()->save(factory(App\Transaction::class)->make());

            }
        });
    }
}
