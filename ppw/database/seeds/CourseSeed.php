<?php

use Illuminate\Database\Seeder;

class CourseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course =  new App\Course(['nome_corso' => 'Danza moderna','costo_orario' => '5','discipline_id' => 1]);
        $course->save();

        $course =  new App\Course(['nome_corso' => 'Danza classica','costo_orario' => '10','discipline_id' => 1]);
        $course->save();

        $course =  new App\Course(['nome_corso' => 'Karate','costo_orario' => '15','discipline_id' => 2]);
        $course->save();

        $course =  new App\Course(['nome_corso' => 'Judo','costo_orario' => '20','discipline_id' => 2]);
        $course->save();

        $course =  new App\Course(['nome_corso' => 'Yoga','costo_orario' => '25','discipline_id' => 3]);
        $course->save();

        $course =  new App\Course(['nome_corso' => 'Stretching','costo_orario' => '10','discipline_id' => 3]);
        $course->save();



    }
}
