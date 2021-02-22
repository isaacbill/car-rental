<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruds', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('VehiclesTitle');
            $table->string('VehiclesBrand');
            $table->string('ModelYear');
            $table->string('FuelType');
            $table->string('PricePerDay');
            $table->string('SeatingCapacity');
            $table->string('image');
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
        Schema::dropIfExists('cruds');
    }
}
