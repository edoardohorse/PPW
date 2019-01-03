<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('modalita_pagamento');
            $table->string('descrizione');
            $table->string('file_fattura');
            $table->dateTime('data');
            $table->string('tipo_fattura');
            $table->string('tipo_transazione');
            $table->string('tipo_ricevuta');
            $table->double('importo');
            $table->integer('asd_id')->unsigned();

            $table->timestamps();
        });
        Schema::table('transactions', function (Blueprint $table){

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
        Schema::dropIfExists('transactions');
    }
}
