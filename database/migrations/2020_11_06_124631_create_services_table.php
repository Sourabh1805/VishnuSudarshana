<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('Service_id');
            $table->string('Service_name');
            $table->string('Service_description');
            $table->string('Service_prize');
            $table->string('Service_status')->default(0);
            $table->string('Service_image1');
            $table->string('Service_image2')->nullable(); 
            $table->string('Service_image3')->nullable();
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
        Schema::dropIfExists('services');
    }
}
