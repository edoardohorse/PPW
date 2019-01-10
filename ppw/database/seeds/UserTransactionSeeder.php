<?php

use Illuminate\Database\Seeder;

class UserTransactionSeeder extends Seeder
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
            foreach(range(1, 5) as $i)
            {
                $user->transactions()->save(factory(App\Transaction::class)->make());
            }
        });

    }
}
