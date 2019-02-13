<?php

use Illuminate\Database\Seeder;

class DisciplineSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(App\Discipline::class, 1)->create();
        DB::table('disciplines')->insert(
            [
            [
            'id'    => '1',
            'nome'=>'Danza',
            ],
            [
                'id'    =>'2',
                'nome'=>'Combattimento',
            ],
            [
                'id'    =>'3',
                'nome'=>'Relax',
            ]
                ]
        );
    }
}
