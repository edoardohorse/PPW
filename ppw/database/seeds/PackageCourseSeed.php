<?php

use Illuminate\Database\Seeder;

class PackageCourseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Package::class, 3)->create()
            ->each(function($package){
                $course = App\Course::inRandomOrder()->take(3)->pluck('id');
                $course->each(function($course) use($package){
                    App\PackageCourse::create([
                        'package_id' => $package->id,
                        'course_id' => $course
                    ]);
                });
            });
    }
}
