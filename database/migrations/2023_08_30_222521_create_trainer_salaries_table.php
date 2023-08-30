<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_salaries', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('trainer_id');
            $table->string('customer_id');
            $table->string('package_id');
            $table->unsignedBigInteger('nominal');
            $table->string('month');
            $table->string('year');
            $table->string('percentage');
            $table->timestamps();
        });

        Schema::table('trainer_salaries', function($table) {
            $table->foreign('trainer_id')->references('id')->on('users');
            $table->foreign('customer_id')->references('id')->on('users');
            $table->foreign('package_id')->references('id')->on('package_customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainer_salaries');
    }
}
