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
            $table->string('numero_cell')->nullable();
            $table->string('numero_tel')->nullable();
            $table->date('data_stipula_ass')->nullable();
            $table->date('scadenza_ass')->nullable();
            $table->integer('numero_ass')->nullable();
            $table->date('data_cert_medico')->nullable();
            $table->date('scadenza_cert_med')->nullable();
            $table->enum('ruolo', [ 'fond', 'seg' ]);
            $table->string('note')->nullable();
            $table->string('p_iva')->nullable();


            $table->timestamps();


        });

        Schema::table('members', function (Blueprint $table) {
            $table->unsignedInteger('user_site_id')->nullable();
            $table->foreign('user_site_id')->references('id')->on('users_site');
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
