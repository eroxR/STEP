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
        Schema::create('driver_permit', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('fuec');
			$table->unsignedBigInteger('driver');
			
			$table->timestamps();
			
			$table->foreign('driver')->references('id')->on('drivers')->onUpdate('cascade');
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
        Schema::dropIfExists('driver_permit');
    }
};
