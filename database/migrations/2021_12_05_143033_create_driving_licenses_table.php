<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrivingLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driving_licenses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('driver_user_id')->nullable()->unsigned();
            $table->string('surname');
            $table->string('other_names');
            $table->string('id_number')->unique();
            $table->string('license_number')->unique();
            $table->string('date_of_birth');
            $table->string('date_of_issue');
            $table->string('gender');
            $table->string('phone_number');
            $table->timestamp('date_of_expiry');
            $table->string('county_of_residence');
            $table->string('plate_number')->unique();
            $table->string('uploaded_vehicle');
            $table->string('driving_license');
            $table->string('driver_points');
            $table->string('driver_verification');
            $table->foreign('driver_user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('driving_licenses');
    }
}
