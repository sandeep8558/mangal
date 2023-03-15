<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_groups', function (Blueprint $table) {
            $table->id();

            $table->set('display', ['Show', 'Hide'])->default('Show');
            $table->string('salary_group_name');
            $table->text('description')->nullable();
            $table->set('payment_type', ['Hourly', 'Daily', 'Weekly', 'Monthly'])->default('Hourly');
            $table->integer('working_minutes_per_day')->default(0);
            $table->double('salary_amount')->nullable();

            $table->double('basic')->nullable();
            $table->double('houserent')->nullable();
            $table->double('dearness')->nullable();
            $table->double('conveyance')->nullable();
            $table->double('travelling')->nullable();
            $table->double('employee_pf')->nullable();
            $table->double('employer_pf')->nullable();
            $table->double('professional_tax')->nullable();
            $table->double('esic')->nullable();
            $table->double('otperhr')->nullable();
            $table->double('bonus')->nullable();

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
        Schema::dropIfExists('salary_groups');
    }
}
