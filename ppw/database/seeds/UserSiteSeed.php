<?php

use Illuminate\Database\Seeder;

class UserSiteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // factory(App\UserSite::class, 1)->create();

        DB::table('users_site')->insert(
            [
                [
                    "id" => 1,
                    "email" => "email@prova.it",
                    "email_verified_at" => null,
                    "password" => '$2y$10$LCkWZozXtkppYtMLD1iUfOksjO9CM22HFkeKo.Yo3pHcNfgKR07dK',
                    "remember_token" => null,
                    "created_at" => "2019-02-11 09:03:16",
                    "updated_at" => "2019-02-11 09:03:16",
                ],

                [
                    "id" => 2,
                    "email" => "christian@email.it",
                    "email_verified_at" => null,
                    "password" => '$2y$10$LCkWZozXtkppYtMLD1iUfOksjO9CM22HFkeKo.Yo3pHcNfgKR07dK',
                    "remember_token" => null,
                    "created_at" => "2019-02-11 09:03:16",
                    "updated_at" => "2019-02-11 09:03:16",
                ],
              [
                "id" => 3,
                "email" => "andrea@email.it",
                "email_verified_at" => null,
                "password" => '$2y$10$LCkWZozXtkppYtMLD1iUfOksjO9CM22HFkeKo.Yo3pHcNfgKR07dK',
                "remember_token" => null,
                "created_at" => "2019-02-11 09:03:16",
                "updated_at" => "2019-02-11 09:03:16",
            ],
                [
                    "id" => 4,
                    "email" => "manolo@email.it",
                    "email_verified_at" => null,
                    "password" => '$2y$10$LCkWZozXtkppYtMLD1iUfOksjO9CM22HFkeKo.Yo3pHcNfgKR07dK',
                    "remember_token" => null,
                    "created_at" => "2019-02-11 09:03:16",
                    "updated_at" => "2019-02-11 09:03:16",
                ],

                [
                    "id" => 5,
                    "email" => "sandro@email.it",
                    "email_verified_at" => null,
                    "password" => '$2y$10$LCkWZozXtkppYtMLD1iUfOksjO9CM22HFkeKo.Yo3pHcNfgKR07dK',
                    "remember_token" => null,
                    "created_at" => "2019-02-11 09:03:16",
                    "updated_at" => "2019-02-11 09:03:16",
                ],

            ]
        );
    }


}
