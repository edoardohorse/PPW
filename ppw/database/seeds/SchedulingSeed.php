<?php

use Illuminate\Database\Seeder;

class SchedulingSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $s = new App\Scheduling(['id'=>'1','giorno'=>'Lunedì','ora_inizio'=>'08:00','ora_fine'=>'10:00']);
        $s->save();
        $s->course()->attach('1');
        $s->room()->attach('1');
        $s = new App\Scheduling(['id'=>'2','giorno'=>'Lunedì','ora_inizio'=>'10:00','ora_fine'=>'12:00']);
        $s->save();
        $s->course()->attach('2');
        $s->room()->attach('1');
        $s = new App\Scheduling(['id'=>'3','giorno'=>'Lunedì','ora_inizio'=>'12:00','ora_fine'=>'13:00']);
        $s->save();
        $s->course()->attach('5');
        $s->room()->attach('1');
        $s = new App\Scheduling(['id'=>'4','giorno'=>'Martedì','ora_inizio'=>'08:00','ora_fine'=>'10:00']);
        $s->save();
        $s->course()->attach('4');
        $s->room()->attach('2');
        $s = new App\Scheduling(['id'=>'5','giorno'=>'Mercoledì','ora_inizio'=>'10:00','ora_fine'=>'12:00']);
        $s->save();
        $s->course()->attach('5');
        $s->room()->attach('4');
        $s = new App\Scheduling(['id'=>'6','giorno'=>'Giovedì','ora_inizio'=>'11:00','ora_fine'=>'13:00']);
        $s->save();
        $s->course()->attach('6');
        $s->room()->attach('2');
        $s = new App\Scheduling(['id'=>'7','giorno'=>'Venerdì','ora_inizio'=>'08:00','ora_fine'=>'09:00']);
        $s->save();
        $s->course()->attach('1');
        $s->room()->attach('1');
        $s = new App\Scheduling(['id'=>'8','giorno'=>'Venerdì','ora_inizio'=>'10:00','ora_fine'=>'11:00']);
        $s->save();
        $s->course()->attach('2');
        $s->room()->attach('2');
        $s = new App\Scheduling(['id'=>'9','giorno'=>'Venerdì','ora_inizio'=>'12:00','ora_fine'=>'13:00']);
        $s->save();
        $s->course()->attach('5');
        $s->room()->attach('2');

    }
}
