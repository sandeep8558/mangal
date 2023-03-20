<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamResultMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_result_marks', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('exam_result_id')->index();
            $table->bigInteger('subject_id')->index();
            $table->double('total_marks')->default(0);
            $table->double('obtained_marks')->default(0);
            $table->string('remark')->nullable();

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
        Schema::dropIfExists('exam_result_marks');
    }
}
