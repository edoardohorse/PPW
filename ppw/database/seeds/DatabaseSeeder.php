<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DisciplineSeed::class,
            AsdSeed::class,
            MemberSeed::class,
            UserSeed::class,
            PackageUserSeed::class,
            UserSiteSeed::class,
            ProviderSeed::class,
            AsdMemberSeed::class,
            CollaboratorSeed::class,
            TaxDataSeed::class,
            CardSeed::class,
            CourseUserSeed::class,
            InternalSeed::class,
            TeacherSeed::class,
            InternalCourseSeed::class,
            TeacherCourseSeed::class,
            PackageCourseSeed::class,
            SchedulingCourseSeed::class,
            RoomSchedulingSeed::class,
            ReportSeed::class,





        ]);

    }

}
