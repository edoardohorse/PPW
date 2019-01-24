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
        factory(App\Room::class, 5)->create()
            ->each(function($room){
                $scheduling = App\Scheduling::inRandomOrder()->take(3)->pluck('id');
                $scheduling->each(function($scheduling) use($room){
                    App\RoomScheduling::create([
                        'room_id' => $room->id,
                        'scheduling_id' => $scheduling
                    ]);
                });
            });
    }
}
