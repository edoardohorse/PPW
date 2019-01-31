<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsdMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asd_member', function (Blueprint $table) {
            $table->integer('asd_id')->unsigned();
            $table->integer('member_id')->unsigned();
            $table->unique(['asd_id','member_id']); //Array di colonne, indica univocità tra le coppie di id
            $table->softDeletes(); //Inserisce un campo delete che indica la data di eliminazione della riga
            $table->timestamps();
        });

        Schema::table('asd_member', function (Blueprint $table) {

            $table->foreign('asd_id')->references('id')->on('asds')->onDelete('cascade');
        });

        Schema::table('asd_member', function (Blueprint $table) {

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
        Schema::dropIfExists('asd_member');
    }
}
