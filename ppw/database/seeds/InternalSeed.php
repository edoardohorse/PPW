<?php

use Illuminate\Database\Seeder;

class InternalSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $internal = new App\Internal([
            'collaborator_id' => 3,
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
        ]);
        $internal->save();
        $internal->course()->attach(1);
        $internal->course()->attach(2);
        $internal->course()->attach(3);
        $internal->course()->attach(4);
        $internal->course()->attach(5);
        $internal->course()->attach(6);

        $internal = new App\Internal([
            'collaborator_id' => 4,
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
        ]);
        $internal->save();
        $internal->course()->attach(1);
        $internal->course()->attach(2);
        $internal->course()->attach(3);
        $internal->course()->attach(4);
        $internal->course()->attach(5);
        $internal->course()->attach(6);


        $internal = new App\Internal([
            'collaborator_id' => 5,
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
        ]);
        $internal->save();
        $internal->course()->attach(1);
        $internal->course()->attach(2);
        $internal->course()->attach(3);
        $internal->course()->attach(4);
        $internal->course()->attach(5);
        $internal->course()->attach(6);


        $internal = new App\Internal([
            'collaborator_id' => 6,
            'created_at' => '2019-02-11 09:03:16',
            'updated_at' => '2019-02-11 09:03:16',
        ]);
        $internal->save();
        $internal->course()->attach(1);
        $internal->course()->attach(2);
        $internal->course()->attach(3);
        $internal->course()->attach(4);
        $internal->course()->attach(5);
        $internal->course()->attach(6);


    }
}
