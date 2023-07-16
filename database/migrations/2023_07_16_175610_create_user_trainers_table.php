<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_trainers', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('user_id');
            $table->string('trainer_id');
            $table->timestamps();
        });

        Schema::table('user_trainers', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('trainer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_trainers');
    }
}
