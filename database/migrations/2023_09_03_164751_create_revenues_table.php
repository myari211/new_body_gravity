<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revenues', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('trainer_id');
            $table->string('package_id');
            $table->string('costumer_id');
            $table->unsignedBigInteger('nominal');
            $table->unsignedBigInteger('revenue');
            $table->unsignedBigInteger('profit');
            $table->string('month');
            $table->string('year');
            $table->string('from')->nullable();
            $table->timestamps();
        });

        Schema::table('revenues', function($table) {
            $table->foreign('trainer_id')->references('id')->on('users');
            $table->foreign('package_id')->references('id')->on('package_customers');
            $table->foreign('costumer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revenues');
    }
}
