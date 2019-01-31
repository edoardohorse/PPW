<?php

use Illuminate\Database\Seeder;

class PackageUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Package::class, 5)->create()
            ->each(function($package){
                $user = App\User::inRandomOrder()->take(3)->pluck('id');
                $user->each(function($user_id) use($package){
                    App\PackageUser::create([
                        'package_id' => $package->id,
                        'user_id' => $user_id
                    ]);
                });
            });
    }
}
