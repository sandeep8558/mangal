<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_attendances', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('batch_session_id')->nullable();
            $table->bigInteger('student_id')->nullable();
            $table->set('status', ['Absent', 'Present', 'Short'])->default('Present');

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
        Schema::dropIfExists('session_attendances');
    }
}
