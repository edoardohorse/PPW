<?php

use Illuminate\Database\Seeder;

class InternalSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Internal', 5)->create();

    }
}
