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
            AsdSeed::class,
            UserSiteSeed::class,
            MemberSeed::class,


            DisciplineSeed::class,
            UserSeed::class,
            CourseSeed::class,

            PackageSeed::class,
            RoomSeed::class,
            SchedulingSeed::class,




            PackageUserSeed::class,
            ProviderSeed::class,
            AsdMemberSeed::class,
            CourseUserSeed::class,
//            CollaboratorSeed::class,
            PackageCourseSeed::class,
            CardSeed::class,
//            InternalSeed::class,
//            TeacherSeed::class,
//            InternalCourseSeed::class,
//            TeacherCourseSeed::class,
            ReportSeed::class,
//            TransactionSeed::class,
            /*
            TaxDataSeed::class,









*/




        ]);

    }

}
