<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_course', function (Blueprint $table) {
            $table->integer('package_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->unique(['package_id','course_id']);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('package_course', function (Blueprint $table) {

            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
        });

        Schema::table('package_course', function (Blueprint $table) {

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
        Schema::dropIfExists('package_course');
    }
}
