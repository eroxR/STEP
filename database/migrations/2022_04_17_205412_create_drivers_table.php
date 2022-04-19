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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('user_id');
			$table->bigInteger('license_number')->nullable();
			$table->char('license_category', 3)->nullable();
			$table->date('license_expiration')->nullable();
			$table->date('certificate_drugs_alchoolemia')->nullable();
			$table->date('SIMIT_queries')->nullable();
			$table->date('driving_exam')->nullable();
			$table->date('Norm_Overland_Transportation_Automotive')->nullable();
			$table->date('Rules_Transit')->nullable();
			$table->date('Normative_Tips')->nullable();
			$table->date('Driving_Methods')->nullable();
			$table->date('Defensive_driving')->nullable();
			$table->date('distractions')->nullable();
			$table->date('First_aid')->nullable();
			$table->date('First_Responder')->nullable();
			$table->date('five_senses_driving')->nullable();
			$table->date('Active_Passive_Security_vehicle')->nullable();
			$table->date('Road_safety')->nullable();
			$table->integer('Linked')->nullable();
			
			$table->timestamps();
			
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
};
