<?php

use Illuminate\Database\Seeder;

class TaxDataSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TaxData::class, 10)->create();
    }
}
