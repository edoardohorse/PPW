<?php

use Illuminate\Database\Seeder;

class CardSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create()->each(function(App\User $user)
        {

            foreach(range(1, 2) as $i)
            {
                $user->card()->save(factory(App\Card::class)->make());

            }
        });
    }
}
