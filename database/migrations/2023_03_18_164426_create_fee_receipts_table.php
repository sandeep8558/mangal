<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_receipts', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('student_course_id')->index();
            $table->date('dt')->nullable();
            $table->double('amount')->nullable();
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
        Schema::dropIfExists('fee_receipts');
    }
}
