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
        Schema::create('permit_vehicle', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('fuec');
			$table->unsignedBigInteger('vehicle');
			
			$table->timestamps();
			
			$table->foreign('vehicle')->references('id')->on('vehicles')->onUpdate('cascade');
			$table->foreign('fuec')->references('id')->on('permits')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permit_vehicle');
    }
};
