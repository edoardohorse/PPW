<?php

use Illuminate\Database\Seeder;

class UserSiteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\UserSite::class, 1)->create();
    }
}
