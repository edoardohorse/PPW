<?php

use Illuminate\Database\Seeder;

class SchedulingCourseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scheduling_course')->insert([
            [
                'course_id'=>'1',
                'scheduling_id'=>'1',
            ],
 [
                'course_id'=>'2',
                'scheduling_id'=>'2',
            ],
 [
                'course_id'=>'5',
                'scheduling_id'=>'3',
            ],
 [
                'course_id'=>'4',
                'scheduling_id'=>'4',
            ],
 [
                'course_id'=>'5',
                'scheduling_id'=>'5',
            ],
 [
                'course_id'=>'6',
                'scheduling_id'=>'6',
            ],
 [
                'course_id'=>'1',
                'scheduling_id'=>'7',
            ],

        ]);
    }
}
