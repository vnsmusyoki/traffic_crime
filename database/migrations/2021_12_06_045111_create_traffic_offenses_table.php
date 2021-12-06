<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrafficOffensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traffic_offenses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('driver_user_id')->nullable()->unsigned();
            $table->bigInteger('officer_user_id')->nullable()->unsigned();
            // $table->bigInteger('checkpoint_id')->nullable()->unsigned();
            $table->bigInteger('offense_id')->nullable()->unsigned();
            $table->foreign('driver_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('officer_user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('checkpoint_id')->references('id')->on('traffic_check_points')->onDelete('cascade');
            $table->foreign('offense_id')->references('id')->on('traffic_crimes')->onDelete('cascade');
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
        Schema::dropIfExists('traffic_offenses');
    }
}
