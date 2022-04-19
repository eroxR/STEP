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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id('id');
			$table->unsignedBigInteger('alertStatus')->nullable();
			$table->unsignedBigInteger('alertType')->nullable();
			$table->text('description_alert');
			$table->date('date_alert');
			$table->integer('profile_alert');
			
			$table->timestamps();
			
			$table->foreign('alertStatus')->references('id')->on('alert_statuses')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('alertType')->references('id')->on('alert_types')->onDelete('set null')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
};
