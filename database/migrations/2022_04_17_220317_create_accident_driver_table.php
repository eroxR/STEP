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
        Schema::create('accident_driver', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('accident');
			$table->unsignedBigInteger('driver');
			
			$table->timestamps();
			
			$table->foreign('driver')->references('id')->on('drivers')->onUpdate('cascade');
			$table->foreign('accident')->references('id')->on('accidents')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accident_driver');
    }
};
