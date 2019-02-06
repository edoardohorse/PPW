<?php

use Illuminate\Database\Seeder;


class CourseUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Course::class, 5)->create()
            ->each(function($course){
              $user = App\User::inRandomOrder()->take(3)->pluck('id');
              $user->each(function($user_id) use($course){
                App\CourseUser::create([
                    'course_id' => $course->id,
                    'user_id' => $user_id
                ]);
              });
            });
    }

}