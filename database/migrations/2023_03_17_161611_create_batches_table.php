<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('branch_id')->nullable();
            $table->set('classroom_type', ['Fixed', 'Moving'])->default('Fixed');
            $table->bigInteger('classroom_id')->nullable();
            $table->string('batch_name');
            $table->date('effective_from')->nullable();
            $table->date('effective_till')->nullable();
            $table->integer('sessions')->default(0);

            $table->set('batch_type', ['Daily', 'Staggered'])->default('Daily');
            $table->text('mon_slots')->nullable();
            $table->text('tue_slots')->nullable();
            $table->text('wed_slots')->nullable();
            $table->text('thu_slots')->nullable();
            $table->text('fri_slots')->nullable();
            $table->text('sat_slots')->nullable();
            $table->text('sun_slots')->nullable();

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
        Schema::dropIfExists('batches');
    }
}
