<?php

use Illuminate\Database\Seeder;

class InternalCourseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Internal::class, 2)->create()
            ->each(function($internal){
                $course = App\Course::inRandomOrder()->take(3)->pluck('id');
                $course->each(function($course) use($internal){
                    App\InternalCourse::create([
                        'internal_id' => $internal->id,
                        'course_id' => $course
                    ]);
                });
            });
    }
}
