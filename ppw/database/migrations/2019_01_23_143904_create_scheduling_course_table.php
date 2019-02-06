<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulingCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheduling_course', function (Blueprint $table) {
            $table->integer('scheduling_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->unique(['scheduling_id','course_id']);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('scheduling_course', function (Blueprint $table) {

            $table->foreign('scheduling_id')->references('id')->on('schedulings')->onDelete('cascade');
        });

        Schema::table('scheduling_course', function (Blueprint $table) {

            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scheduling_course');
    }
}
