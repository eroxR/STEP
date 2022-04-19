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
        Schema::create('permits', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('contract')->nullable();
			$table->date('permit_start_date');
			$table->date('permit_end_date');
			$table->integer('permit_number');
			
			$table->timestamps();
			
			$table->foreign('contract')->references('id')->on('contracts')->onDelete('set null')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permits');
    }
};
