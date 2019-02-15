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
        $collaborator = new App\Collaborator([

            'esterno' => 1,
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => 13
        ]);
        $collaborator->save();


        $collaborator = new App\Collaborator([

            'esterno' => 1,
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => 14
        ]);
        $collaborator->save();

        $collaborator = new App\Collaborator([

            'esterno' => 0,
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => 15
        ]);
        $collaborator->save();

        $collaborator = new App\Collaborator([

            'esterno' => 0,
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => 16
        ]);
        $collaborator->save();

        $collaborator = new App\Collaborator([

            'esterno' => 1,
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => 17
        ]);
        $collaborator->save();

        $collaborator = new App\Collaborator([

            'esterno' => 1,
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'user_id' => 18
        ]);
        $collaborator->save();

    }

}
