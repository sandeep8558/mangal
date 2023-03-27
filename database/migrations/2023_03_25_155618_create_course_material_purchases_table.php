<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseMaterialPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_material_purchases', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('course_instrument_id')->index();
            $table->date('dt')->nullable();
            $table->double('amount')->nullable();
            $table->integer('qty')->nullable();
            $table->string('narration')->nullable();

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
        Schema::dropIfExists('course_material_purchases');
    }
}
