<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->set('gender', ['Male', 'Female', 'Other'])->default('Male');
            $table->date('dob')->nullable();
            $table->string('fathersname');
            $table->string('mothersname');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('pincode')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('permanent_city')->nullable();
            $table->string('permanent_pincode')->nullable();
            $table->string('permanent_state')->nullable();
            $table->string('permanent_country')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('parents_number')->nullable();
            $table->string('instagram_id')->nullable();
            $table->string('facebook_id')->nullable();

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
        Schema::dropIfExists('students');
    }
}
