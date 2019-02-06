<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_documento');
            $table->string('tipo_abbonamento');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('tax_data', function(Blueprint $table){

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tax_data');
    }
}
