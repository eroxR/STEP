<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accident_vehicle', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('accident');
			$table->unsignedBigInteger('vehicle');
			
			$table->timestamps();
			
			$table->foreign('accident')->references('id')->on('accidents')->onUpdate('cascade');
			$table->foreign('vehicle')->references('id')->on('vehicles')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accident_vehicle');
    }
};
