<?php

use Illuminate\Database\Seeder;

class RoomSchedulingSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_scheduling')->insert([
           [
               'room_id'=>'1',
               'scheduling_id'=>'1',
           ],
            [
                'room_id'=>'1',
                'scheduling_id'=>'2',
            ],
            [
                'room_id'=>'1',
                'scheduling_id'=>'3',
            ],
            [
                'room_id'=>'2',
                'scheduling_id'=>'4',
            ],
            [
                'room_id'=>'4',
                'scheduling_id'=>'5',
            ],
            [
                'room_id'=>'2',
                'scheduling_id'=>'6',
            ],
            [
                'room_id'=>'1',
                'scheduling_id'=>'7',
            ],
            [
                'room_id'=>'2',
                'scheduling_id'=>'8',
            ],
            [
                'room_id'=>'2',
                'scheduling_id'=>'9',
            ],

        ]);
    }
}
