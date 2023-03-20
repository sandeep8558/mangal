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
            $table->id();

            $table->bigInteger('category_id')->index();
            $table->set('display', ['Show', 'Hide'])->default('Show');
            $table->set('certification', ['Own', 'Outside'])->default('Own');
            $table->set('durationtype', ['Hourly', 'Daily', 'Weekly', 'Monthly', 'Quarterly', 'Biannualy', 'Annualy'])->default('Hourly');
            $table->integer('duration')->nullable();
            $table->integer('order')->default(0);
            $table->string('course');
            $table->string('description')->nullable();
            $table->text('media')->nullable();

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
