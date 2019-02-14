<?php

use Illuminate\Database\Seeder;

class TeacherSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Teacher::class, 5)->create();

        $teacher = new App\Teacher([

            'stagista' => 1,
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'collaborator_id' => 1
        ]);
        $teacher->save();
        $teacher->course()->attach(1);

        $teacher = new App\Teacher([

            'stagista' => 1,
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'collaborator_id' => 2
        ]);
        $teacher->save();
        $teacher->course()->attach(2);


        $teacher = new App\Teacher([

            'stagista' => 0,
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'collaborator_id' => 3
        ]);
        $teacher->save();
        $teacher->course()->attach(3);

        $teacher = new App\Teacher([

            'stagista' => 0,
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'collaborator_id' => 4
        ]);
        $teacher->save();
        $teacher->course()->attach(4);


        $teacher = new App\Teacher([

            'stagista' => 0,
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'collaborator_id' => 5
        ]);
        $teacher->save();
        $teacher->course()->attach(5);

        $teacher = new App\Teacher([

            'stagista' => 0,
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
            'collaborator_id' => 6
        ]);
        $teacher->save();
        $teacher->course()->attach(5);
    }
}
