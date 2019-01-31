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
        factory(App\Scheduling::class, 5)->create()
            ->each(function($scheduling){
                $course = App\Course::inRandomOrder()->take(3)->pluck('id');
                $course->each(function($course) use($scheduling){
                    App\SchedulingCourse::create([
                        'scheduling_id' => $scheduling->id,
                        'course_id' => $course
                    ]);
                });
            });
    }
}
