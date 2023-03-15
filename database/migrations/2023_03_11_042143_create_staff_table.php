<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();

            $table->string('employee_name');
            $table->date('dob')->nullable();
            $table->date('joining')->nullable();
            $table->date('exit')->nullable();
            $table->set('gender', ['Male', 'Female', 'Other'])->default('Male');
            $table->set('blood_group', ['O+', 'O-','A+', 'A-','B+', 'B-','AB+', 'AB-', 'Other'])->default('Other');
            $table->string('aadhar')->nullable();
            $table->string('pan')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('pincode')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('email')->nullable();
            $table->text('photo')->nullable();

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
        Schema::dropIfExists('staff');
    }
}
