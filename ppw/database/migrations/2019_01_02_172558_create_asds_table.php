<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asds', function (Blueprint $table) {

                $table->increments('id');
                $table->string('nome');
                $table->string('logo');
                $table->string('numero_tel');
                $table->string('indirizzo');
                $table->string('citta');
                $table->string('fax');
                $table->string('email');
                $table->string('cod_fiscale');
                $table->string('p_iva');
                $table->string('cap');
                $table->string('provincia');

            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asds');
    }
}
