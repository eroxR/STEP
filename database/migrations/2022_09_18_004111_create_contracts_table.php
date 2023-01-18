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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();//id_contrato
			$table->integer('contract_number');//numero_unico_contrato
			$table->unsignedBigInteger('type_contract')->nullable();//tipo_contrato
			$table->string('route_trip_contract');//ruta_viaje_contra
			$table->date('date_start_contract');//fecha_ini_contra
			$table->date('contract_end_date');//fecha_fin_contra
			$table->decimal('contract_value', $precision = 12, $scale = 2);//valor_contrato
			$table->string('contracting_name', 120);//nombre_contratante
			$table->enum('state_contract', ['1','2','3','4','5'])->default('1'); //estado_contrato['INICIAL','CANCELADO','EN CURSO','FINALIZADO','PENDIENTE'])->default('INICIAL');
			$table->unsignedBigInteger('identification')->nullable();//identificacion_contratante
			$table->bigInteger('contract_document');//documento_contratante
			$table->string('expedition_identificationcard');//lugar_fecha_expedicion_cedula_contratante
			$table->string('contracting_phone')->nullable();//telefono_contratante
			$table->string('contracting_direction', 150)->nullable();//direccion_contratante
			$table->string('legal_representative', 120)->nullable();//representante_legal
			$table->string('legal_representative_expedition_identificationcard')->nullable();//fecha_lugar_expedicion_cedula_representante_legal
			$table->integer('passenger_quantity')->nullable();//cant_pasajeros
			$table->enum('total_disposition', ['SI', 'NO'])->nullable();//disposicionTotal
			$table->integer('quantity_vehicle')->nullable();//cantidad_vehiculos
			$table->string('cooperation_contract', 60)->nullable();//cooperacion_contrato
			$table->string('entity_name', 60)->nullable();//nombre_empresa
			$table->string('secure_policy', 60)->nullable();//poliza_seguro
			$table->unsignedBigInteger('tipe_pay')->nullable();//tipo_pago
			$table->date('contract_signing_date');//fecha_firma_contrato
			$table->string('school_name', 150)->nullable();//nombre_colegio
			$table->string('address_school', 150)->nullable();//direccion_colegio
			$table->unsignedBigInteger('identification_represent_legal')->nullable();//identificación_represen_legal
			$table->bigInteger('identificationcard_represent_legal')->nullable();//cedula_represen_legal
			$table->string('trip_from');//viaje_desde
			$table->string('trip_to', 100);//viaje_hasta
			$table->string('place_of_origin', 100);//lugar_origen
			$table->string('destination_place', 100);//lugar_destino
			$table->string('return_place', 100);//lugar_regreso
			$table->bigInteger('identificationcard_representative_group')->nullable();//cedula_representante_grupo
			$table->string('group_representative_name', 60)->nullable();//nombre_representante_grupo
			$table->string('dateofexpedition_representative_group', 100)->nullable();//lugar_fecha_expedicion_cedula_representante_grupo
			$table->enum('signed_contract', ['0', '1']);//estado_firma_contrato['Sin firmar','Firmado']
			
			$table->timestamps();
			
			$table->foreign('type_contract')->references('id')->on('contract_types')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('tipe_pay')->references('id')->on('payment_types')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('identification')->references('id')->on('identifications')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('identification_represent_legal')->references('id')->on('identifications')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
};
