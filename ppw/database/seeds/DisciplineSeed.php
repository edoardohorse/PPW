<?php

use Illuminate\Database\Seeder;

class DisciplineSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Discipline::class, 5)->create()->each(function(App\Discipline $discipline)
        {

            foreach(range(1, 2) as $i)
            {
                $discipline->course()->save(factory(App\Course::class)->make());

            }
        });
    }
}
