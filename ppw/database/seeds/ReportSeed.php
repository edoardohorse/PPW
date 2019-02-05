<?php

use Illuminate\Database\Seeder;

class ReportSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Report::class, 5)->create();
    }
}
