<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_customers', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('package');
            $table->unsignedBigInteger('total_package');
            $table->unsignedBigInteger('total_money');
            $table->unsignedBigInteger('total_usage');
            $table->string('trainer')->nullable();
            $table->string('user_id');
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::table('package_customers', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('trainer')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_customers');
    }
}
