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
            $table->integer('asd_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('users', function(Blueprint $table){

            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
        });
        Schema::table('users', function(Blueprint $table){

            $table->foreign('asd_id')->references('id')->on('asds')->onDelete('cascade');
        });
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
