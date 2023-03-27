<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatchSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batch_sessions', function (Blueprint $table) {
            $table->id();

            $table->set('status', ['Pending', 'Done', 'Cancelled', 'Postponed', 'Weekoff', 'Holiday'])->default('Pending');
            $table->bigInteger('staff_id')->nullable();
            $table->bigInteger('batch_id')->nullable();
            $table->bigInteger('classroom_id')->nullable();
            $table->text('slots')->nullable();
            $table->date('dt')->nullable();
            $table->string('topic_covered')->nullable();
            $table->string('description')->nullable();
            $table->bigInteger('validated_id')->nullable();

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
        Schema::dropIfExists('batch_sessions');
    }
}
