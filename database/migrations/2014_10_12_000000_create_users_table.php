<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();

            $table->set('role', ['Staff', 'Faculty', 'Student', 'Administrator'])->default('Student');
            $table->set('status', ['Active', 'Non-Active', 'Block', 'Hold', 'Discontinue'])->default('Active');

            $table->string('api_token', 80)->unique()->nullable();
            $table->timestamp('token_expire_at')->nullable();
            $table->string('otp', 10)->nullable();

            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
