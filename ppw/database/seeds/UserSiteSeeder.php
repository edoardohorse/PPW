<?php

use Illuminate\Database\Seeder;

class UserSiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\UserSite::class, 5)->create();
    }
}
