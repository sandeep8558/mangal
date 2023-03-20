<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_qualifications', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('student_id')->nullable();
            $table->string('particular');
            $table->integer('year')->nullable();
            $table->string('university')->nullable();
            $table->string('grade')->nullable();
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
        Schema::dropIfExists('student_qualifications');
    }
}
