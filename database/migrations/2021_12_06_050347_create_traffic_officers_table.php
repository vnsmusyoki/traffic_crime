<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrafficOfficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traffic_officers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('traffic_user_id')->nullable()->unsigned();
            $table->bigInteger('checkpoint_id')->nullable()->unsigned();
            $table->string('phone_number');
            $table->string('picture');
            $table->string('gender');
            $table->foreign('traffic_user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('traffic_officers');
    }
}
