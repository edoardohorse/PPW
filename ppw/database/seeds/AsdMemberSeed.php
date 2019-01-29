<?php

use Illuminate\Database\Seeder;


class AsdMemberSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Member::class, 5)->create()
           ->each(function($member){
               $asd = App\Asd::inRandomOrder()->take(1)->pluck('id');
               $asd->each(function($asd_id) use($member){
                   App\AsdMember::create([
                       'asd_id' => $asd_id,
                       'member_id' => $member->id
                   ]);
               });
           });
    }
}
