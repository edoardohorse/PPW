<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_fiscale');
            $table->string('numero_cell');
            $table->string('numero_tel');
            $table->string('email')->unique();
            $table->date('data_stipula_ass');
            $table->date('scadenza_ass');
            $table->integer('numero_ass');
            $table->date('data_cert_medico');
            $table->date('scadenza_cert_med');
            $table->string('ruolo');
            $table->string('note');
            $table->string('p_iva');


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
        Schema::dropIfExists('members');
    }
}
