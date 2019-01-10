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
            AsdTransactionSeeder::class,
            UserTransactionSeeder::class,
            ProviderTransactionSeeder::class,
            CollaboratorTransactionSeeder::class,
            AsdMemberSeeder::class,
        ]);

    }

}
