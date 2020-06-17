<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            //$table->bigInteger('student_id')->unsigned();
            //$table->integer('student_id')->unsigned();
            $table->integer('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->integer('course_id');
            $table->string('course_name');
            $table->integer('section');
            $table->string('class_start');
            $table->string('class_end');
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
        Schema::dropIfExists('courses');
    }
}
