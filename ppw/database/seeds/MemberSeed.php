<?php

use Illuminate\Database\Seeder;

class MemberSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Member::class, 10)->create();
    }
}