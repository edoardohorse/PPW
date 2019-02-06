<?php

use Illuminate\Database\Seeder;

class TeacherCourseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Teacher::class, 3)->create()
            ->each(function($teacher){
                $course = App\Course::inRandomOrder()->take(3)->pluck('id');
                $course->each(function($course) use($teacher){
                    App\TeacherCourse::create([
                        'teacher_id' => $teacher->id,
                        'course_id' => $course
                    ]);
                });
            });
    }
}
