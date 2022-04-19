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
        Schema::create('passengers', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('identification')->nullable();
			$table->integer('identificationcard_passenger');
			$table->string('names_lastnames');
			$table->unsignedBigInteger('permit')->nullable();
			$table->unsignedBigInteger('contract')->nullable();
			
			$table->timestamps();
			
			$table->foreign('permit')->references('id')->on('permits')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('contract')->references('id')->on('contracts')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('identification')->references('id')->on('identifications')->onDelete('set null')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passengers');
    }
};
