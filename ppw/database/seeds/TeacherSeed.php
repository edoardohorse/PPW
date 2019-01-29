<?php

use Illuminate\Database\Seeder;

class TeacherSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Teacher::class, 5)->create();
    }
}
