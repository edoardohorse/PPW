<?php

use Illuminate\Database\Seeder;

class CollaboratorSeed extends Seeder
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
                $collaborator->transaction()->save(factory(App\Transaction::class)->make());
            }
        });

    }
}
