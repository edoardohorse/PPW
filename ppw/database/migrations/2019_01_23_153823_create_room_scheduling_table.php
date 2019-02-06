<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomSchedulingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_scheduling', function (Blueprint $table) {
            $table->integer('room_id')->unsigned();
            $table->integer('scheduling_id')->unsigned();
            $table->unique(['room_id','scheduling_id']);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('room_scheduling', function (Blueprint $table) {

            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
        });

        Schema::table('room_scheduling', function (Blueprint $table) {

            $table->foreign('scheduling_id')->references('id')->on('schedulings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_scheduling');
    }
}
