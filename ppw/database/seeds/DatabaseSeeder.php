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
            CourseSeed::class,
            PackageSeed::class,
            RoomSeed::class,
            SchedulingSeed::class,



            AsdSeed::class,
            UserSiteSeed::class,
            MemberSeed::class,
            UserSeed::class,
//            PackageUserSeed::class,
            ProviderSeed::class,
            AsdMemberSeed::class,
//            CourseUserSeed::class,
            /*CollaboratorSeed::class,
            TaxDataSeed::class,
            CardSeed::class,

            InternalSeed::class,
            TeacherSeed::class,
            InternalCourseSeed::class,
            TeacherCourseSeed::class,
            PackageCourseSeed::class,

            ReportSeed::class,
*/




        ]);

    }

}
