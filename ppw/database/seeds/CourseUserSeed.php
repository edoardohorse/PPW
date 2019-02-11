<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

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
                    'user_id' => $user_id,
                    'data_inizio' => $faker->date(),
                    'data_fine' => $faker->date($max = now())
                ]);
              });
            });
    }

}