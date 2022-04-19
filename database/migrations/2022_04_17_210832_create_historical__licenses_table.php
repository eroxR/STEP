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
        Schema::create('historical__licenses', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('driver')->nullable();
			$table->integer('license_number');
			$table->char('license_category', 3);
			$table->date('license_expiration');
			
			$table->timestamps();
			
			$table->foreign('driver')->references('id')->on('drivers')->onDelete('set null')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historical__licenses');
    }
};
