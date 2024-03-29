<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('ragione_sociale');
            $table->string('indirizzo');
            $table->string('cap');
            $table->string('citta');
            $table->string('provincia');
            $table->string('tipo_fornitura');
            $table->string('note');
            $table->integer('member_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('providers', function(Blueprint $table){

            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('providers');
    }
}
