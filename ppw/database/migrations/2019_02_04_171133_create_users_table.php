<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cognome');
            $table->string('cap');
            $table->string('indirizzo');
            $table->string('citta');
            $table->string('provincia');
            $table->date('data_nascita');
            $table->string('genere');
            $table->string('tipo')->nullable();
            $table->integer('member_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('users', function(Blueprint $table){

            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
        });


        /* Tabella per laravel cashier. Tabella user */


        Schema::table('users', function ($table) {
            $table->string('stripe_id')->nullable()->collation('utf8mb4_bin');
            $table->string('card_brand')->nullable();
            $table->string('card_last_four', 4)->nullable();
            $table->timestamp('trial_ends_at')->nullable();
        });


        /* Tabella per laravel cashier. Tabella subscriptions */


        Schema::create('subscriptions', function ($table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('stripe_id')->collation('utf8mb4_bin');
            $table->string('stripe_plan');
            $table->integer('quantity');
            $table->timestamp('trial_ends_at')->nullable();
            $table->timestamp('ends_at')->nullable();
            $table->timestamps(); });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
