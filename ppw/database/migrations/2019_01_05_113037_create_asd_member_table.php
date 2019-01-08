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
                $table->string('member_id');
                $table->unique(['asd_id','member_id']); //Array di colonne, indica univocità tra le coppie di id
                $table->softDeletes();
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
        Schema::dropIfExists('asd_member');
    }
}
