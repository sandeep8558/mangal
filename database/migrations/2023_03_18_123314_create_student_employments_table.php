<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentEmploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_employments', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('student_id')->nullable();
            $table->string('company');
            $table->date('doj')->nullable();
            $table->string('designation')->nullable();
            $table->string('location')->nullable();

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
        Schema::dropIfExists('student_employments');
    }
}
