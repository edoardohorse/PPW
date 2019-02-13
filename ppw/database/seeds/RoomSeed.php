<?php

use Illuminate\Database\Seeder;

class RoomSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'id' =>1,
                'nome'=>'Sala 1'
            ],
            [
                'id' =>2,
                'nome'=>'Sala 2'
            ],
            [
                'id' =>3,
                'nome'=>'Sala 3'
            ],
            [
                'id' =>4,
                'nome'=>'Sala 4'
            ],
        ]);
    }
}
