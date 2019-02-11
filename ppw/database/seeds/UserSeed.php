<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 1)->create()->each(function(App\User $user)
        {
            foreach(range(1, 2) as $i)
            {
                $user->transaction()->save(factory(App\Transaction::class)->make());
            }
        });
    }
}
