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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('plate_vehicle', 12)->unique();
			$table->string('brand_vehicle', 60);
			$table->year('model_vehicle');
			$table->string('vehicle_chassis_number', 120);
			$table->integer('cylinder_vehicle');
			$table->unsignedBigInteger('vehicle_type')->nullable();
			$table->bigInteger('side_vehicle');
			$table->unsignedBigInteger('owner_vehicle')->nullable();
			$table->unsignedBigInteger('driver')->nullable();
			$table->integer('number_passenger');
			$table->date('secure_start_date');
			$table->date('secure_end_date');
			$table->bigInteger('number_accreditation_soat');
			$table->date('date_start technomechanics');
			$table->date('technomechanical_end_date');
			$table->bigInteger('number_technomechanical_accreditation');
			$table->date('tax_date');
			$table->string('fuel', 60);
			$table->enum('internal_external_owner_type', ['EXTERNO', 'INTERNO'])->DEFAULT('INTERNO');
			$table->unsignedBigInteger('infrastructure_vehicle')->nullable();
			$table->enum('state_vehicle', ['ACTIVO', 'INACTIVO'])->DEFAULT('ACTIVO');
			$table->bigInteger('card_operation');
			$table->date('expiration_card_operation');
			$table->date('expiration_preventive');
			$table->date('gas_expiration');
			$table->date('admission_date');
			$table->bigInteger('engine_number');
			$table->string('use_vehicle', 60);
			$table->string('color_vehicle', 50);
			$table->integer('quantity_valves');
			$table->integer('number_cylinders');
			$table->integer('turbo');
			$table->integer('orientation');
			$table->integer('type_direction');
			$table->integer('transmission_type');
			$table->integer('number_speeds');
			$table->integer('tire_number');
			$table->integer('type_bearing');
			$table->integer('front_suspension');
			$table->integer('rear_suspension');
			$table->integer('dimension_rims');
			$table->string('material_rims', 120);
			$table->integer('rear_brake_type');
			$table->integer('front_brake_type');
			$table->integer('body_serial_number');
			$table->integer('number_windows');
			
			$table->timestamps();
			
			$table->foreign('driver')->references('id')->on('drivers')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('vehicle_type')->references('id')->on('vehicle_types')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('owner_vehicle')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('infrastructure_vehicle')->references('id')->on('vehicle_classes')->onDelete('set null')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
};
