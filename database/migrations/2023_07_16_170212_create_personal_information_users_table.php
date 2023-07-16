<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInformationUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_information_users', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('phone');
            $table->date('birth_date');
            $table->string('user_id');
            $table->string('gender');
            $table->timestamps();
        });

        Schema::table('personal_information_users', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_information_users');
    }
}
