<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverCrimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_crimes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('crime_id')->nullable()->unsigned();
            $table->bigInteger('driver_id')->nullable()->unsigned();
            $table->integer('points');
            $table->bigInteger('officer_id')->nullable()->unsigned();
            $table->bigInteger('license_id')->nullable()->unsigned();
            $table->bigInteger('checkpoint_id')->nullable()->unsigned();
            $table->string('vehicle');
            $table->foreign('crime_id')->references('id')->on('traffic_crimes')->onDelete('cascade');
            $table->foreign('driver_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('officer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('license_id')->references('id')->on('driving_licenses')->onDelete('cascade');
            $table->foreign('checkpoint_id')->references('id')->on('traffic_check_points')->onDelete('cascade');
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
        Schema::dropIfExists('driver_crimes');
    }
}
