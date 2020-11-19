<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
          $table->bigIncrements('Appointment_id');
          $table->string('Appointment_user_id');
          $table->string('Appointment_service_id');
          $table->string('Appointment_time');
          $table->string('Appointment_ispaid');
          $table->string('Appointment_prize');
          $table->string('Appointment_status')->default(0);
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
        Schema::dropIfExists('appointments');
    }
}
