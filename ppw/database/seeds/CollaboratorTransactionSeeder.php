<?php

use Illuminate\Database\Seeder;

class CollaboratorTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Collaborator::class, 1)->create()->each(function(App\Collaborator $collaborator)
        {
            foreach(range(1, 5) as $i)
            {
                $collaborator->transactions()->save(factory(App\Transaction::class)->make());
            }
        });

    }
}
