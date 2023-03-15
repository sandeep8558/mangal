<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_histories', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('staff_id')->index();
            $table->bigInteger('branch_id')->index();
            $table->date('effective_from')->nullable();
            $table->date('effective_till')->nullable();
            $table->text('remark')->nullable();

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
        Schema::dropIfExists('branch_histories');
    }
}
