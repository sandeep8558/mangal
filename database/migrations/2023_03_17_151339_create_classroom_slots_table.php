<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classroom_slots', function (Blueprint $table) {
            $table->id();

            $table->integer('order')->default(0);
            $table->string('name');
            $table->string('description')->nullable();
            $table->time('from')->nullable();
            $table->time('to')->nullable();
            $table->integer('minutes')->nullable();

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
        Schema::dropIfExists('classroom_slots');
    }
}
