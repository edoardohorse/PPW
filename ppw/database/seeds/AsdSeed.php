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
        factory(App\Asd::class, 1)->create();

    }
}