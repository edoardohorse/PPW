<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternalCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internal_course', function (Blueprint $table) {
            $table->integer('internal_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->unique(['internal_id','course_id']);
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::table('internal_course', function (Blueprint $table) {

            $table->foreign('internal_id')->references('id')->on('internals')->onDelete('cascade');
        });

        Schema::table('internal_course', function (Blueprint $table) {

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
        Schema::dropIfExists('internal_course');
    }
}
