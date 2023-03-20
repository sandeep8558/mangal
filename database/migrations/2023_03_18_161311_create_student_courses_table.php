<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_courses', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('branch_id')->nullable();
            $table->bigInteger('student_id')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->bigInteger('course_id')->nullable();
            $table->double('actual_fees_amount')->nullable();
            $table->double('discount')->nullable();
            $table->double('fees_amount')->nullable();
            $table->date('admission_at')->nullable();
            $table->date('effective_from')->nullable();
            $table->date('effective_till')->nullable();

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
        Schema::dropIfExists('student_courses');
    }
}
