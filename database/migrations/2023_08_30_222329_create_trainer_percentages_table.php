<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerPercentagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_percentages', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->unsignedBigInteger('percentage');
            $table->string('trainer_id');
            $table->timestamps();
        });

        Schema::table('trainer_percentages', function($table) {
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
        Schema::dropIfExists('trainer_percentages');
    }
}
