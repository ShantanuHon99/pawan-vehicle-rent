<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('driver_name');
            $table->string('driver_contact'); // Added Field
            $table->string('vehicle_type');
            $table->string('vehicle_number')->unique();
            $table->json('vehicle_pictures');
            $table->boolean('available')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
