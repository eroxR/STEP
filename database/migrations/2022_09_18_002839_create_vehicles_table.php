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
            $table->id();//id_vehiculo
            $table->string('plate_vehicle', 12)->unique();//placa_vehiculo
			$table->string('brand_vehicle', 60)->nullable();//marca_vehiculo
			$table->year('model_vehicle')->nullable();//modelo_vehiculo
			$table->string('vehicle_chassis_number', 120)->nullable();//numero_chasis_vehiculo
			$table->string('property_card_number')->nullable();//tarjeta_propiedad
			$table->string('cylinder_vehicle', 7)->nullable();//cilindraje_vehiculo
			$table->unsignedBigInteger('vehicle_type')->nullable();//tipo_vehiculo
			$table->string('side_vehicle', 4)->nullable();//lateral_vehiculo
			$table->unsignedBigInteger('owner_vehicle')->nullable();//propietario_vehiculo
			$table->unsignedBigInteger('driver_id')->nullable();//conductor
			$table->integer('number_passenger')->nullable();//nunero_pasajeros
			$table->date('secure_end_date')->nullable();//fecha_fin_SOAT
			$table->string('number_accreditation_soat')->nullable();//numero_acreditacion_soat
			$table->date('technomechanical_end_date')->nullable();//fecha_fin_tecnomecanica
			$table->string('number_technomechanical_accreditation')->nullable();//numero_acreditacion_tecno
			$table->date('certificate_extracontractual')->nullable(); // certificado_extracontractual
			$table->date('civil_contractual')->nullable(); // certificado_civil_contractual
			$table->enum('internal_external_owner_type', ['1', '2'])->nullable();//tipo_propietario_externo_interno['EXTERNO','INTERNO']
			$table->unsignedBigInteger('infrastructure_vehicle')->nullable();//infraestructura_vehiculo_combustible
			$table->enum('state_vehicle', ['1', '2','3','4'])->DEFAULT('3');//estado_vehiculo['Inhabilitado','Habilitado','Inactivo','Pendiente']
			$table->bigInteger('card_operation')->nullable();//numero_tarjeta_operacion
			$table->date('expiration_card_operation')->nullable();//vencimiento_tarjeta_operacion
            /* $table->date('preventive')->nullable();//numero_preventiva */
			$table->date('expiration_preventive')->nullable();//vencimiento_preventiva
			$table->date('admission_date')->nullable();//fecha_ingreso_vahiculo
            $table->date('vehicle_pickup_date')->nullable();//fecha_retiro_vahiculo
			$table->string('engine_number')->nullable();//Número_de_motor
			$table->string('use_vehicle', 60)->nullable();//uso_vehiculo
			$table->string('color_vehicle', 50)->nullable();//color_vehiculo
			$table->integer('quantity_valves')->nullable();//cantidad_valvulas
			$table->integer('number_cylinders')->nullable();//cantidad_cilindros
			$table->integer('turbo')->nullable();//turbo
			$table->integer('orientation')->nullable();//orientacion
			$table->integer('type_direction')->nullable();//tipo_direccion
			$table->integer('transmission_type')->nullable();//tipo_transmicion
			$table->integer('number_speeds')->nullable();//numero_velocidades
			$table->integer('tire_number')->nullable();//numero_llantas
			$table->integer('type_bearing')->nullable();//tipo_rodamiento
			$table->integer('front_suspension')->nullable();//suspensiones_delantera
			$table->integer('rear_suspension')->nullable();//suspensiones_trasera
			$table->unsignedBigInteger('dimension_rims')->nullable();//dimension_rines
			$table->string('material_rims', 120)->nullable();//material_rines
			$table->unsignedBigInteger('rear_brake_type')->nullable();//tipo_freno_trasero
			$table->unsignedBigInteger('front_brake_type')->nullable();//tipo_freno_delantero
			// $table->integer('body_serial_number')->nullable();//numero_serie_carroseria
			$table->integer('number_windows')->nullable();//numero_ventanas
			
			$table->timestamps();
			
			$table->foreign('driver_id')->references('id')->on('drivers')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('vehicle_type')->references('id')->on('vehicle_types')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('owner_vehicle')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('infrastructure_vehicle')->references('id')->on('vehicle_classes')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('dimension_rims')->references('id')->on('dimension_rims')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('rear_brake_type')->references('id')->on('brake_types')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('front_brake_type')->references('id')->on('brake_types')->onDelete('set null')->onUpdate('cascade');
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
