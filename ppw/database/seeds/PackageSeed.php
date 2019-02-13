<?php

use Illuminate\Database\Seeder;

class PackageSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pack = new App\Package(['nome_pacchetto'=>'Pacchetto danza','prezzo'=>'40']);
        $pack->save();
        $pack->course()->attach([1,2]);
        $pack = new App\Package(['nome_pacchetto'=>'Pacchetto combattimento','prezzo'=>'45']);
        $pack->save();
        $pack->course()->attach([3,4]);
        $pack = new App\Package(['nome_pacchetto'=>'Pacchetto relax','prezzo'=>'35']);
        $pack->save();
        $pack->course()->attach([5,6]);


    }
}
