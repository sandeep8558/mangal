<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();

            $table->set('display', ['Show', 'Hide'])->default('Show');
            $table->string('classroom_name');
            $table->string('description')->nullable();
            $table->integer('seating_capacity')->default(0);
            $table->integer('pc_capacity')->default(0);
            $table->text('slots')->nullable();

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
        Schema::dropIfExists('classrooms');
    }
}
