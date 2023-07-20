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
			$table->string('route_trip_contract')->nullable();//ruta_viaje_contra
			$table->date('date_start_contract');//fecha_ini_contra
			$table->date('contract_end_date')->nullable();//fecha_fin_contra
			$table->decimal('contract_value', $precision = 12, $scale = 2)->nullable();//valor_contrato
			$table->string('contracting_name', 120);//nombre_contratante
			$table->enum('state_contract', ['1','2','3','4','5'])->default('1'); //estado_contrato['INICIAL','CANCELADO','EN CURSO','FINALIZADO','PENDIENTE'])->default('INICIAL');
			$table->unsignedBigInteger('identification')->nullable();//identificacion_contratante
			$table->bigInteger('contract_document');//documento_contratante
			$table->string('expedition_identificationcard')->nullable();//lugar_fecha_expedicion_cedula_contratante
			$table->string('contracting_phone')->nullable();//telefono_contratante
			$table->string('contracting_direction', 150)->nullable();//direccion_contratante
			$table->string('legal_representative', 120)->nullable();//representante_legal
			$table->string('legal_representative_expedition_identificationcard')->nullable();//fecha_lugar_expedicion_cedula_representante_legal
			$table->integer('passenger_quantity')->nullable();//cant_pasajeros
			$table->enum('total_disposition', ['SI', 'NO'])->nullable();//disposicionTotal
			$table->integer('quantity_vehicle')->nullable();//cantidad_vehiculos
			$table->string('cooperation_contract', 60)->nullable();//cooperacion_contrato
			$table->unsignedBigInteger('tipe_pay')->nullable();//tipo_pago
			$table->date('contract_signing_date')->nullable();//fecha_firma_contrato
			$table->string('signature_place', 250)->nullable();//lugar_firma_contrato
			$table->string('school_name', 150)->nullable();//nombre_colegio
			$table->string('address_school', 150)->nullable();//direccion_colegio
			$table->string('school_year', 5)->nullable();//año_escolar
			$table->enum('contract_with', ['1','2','3','4'])->default('1')->nullable(); //contrato_con['Con Grupo PADRES','Con UNIVERSITARIOS','Con ESTUDIANTE CON ACUDIENTE','Con RECTOR O REPRESENTANTE LEGAL Del Colegio'])->default('INICIAL');
			$table->unsignedBigInteger('identification_represent_legal')->nullable();//identificación_represen_legal
			$table->bigInteger('identificationcard_represent_legal')->nullable();//cedula_represen_legal
			$table->time('exit_contract')->nullable();//salida
			$table->time('arrival_contract')->nullable();//llegada
			$table->time('return_contract')->nullable();//regreso
			$table->enum('legal_bond', ['1','2'])->default('1')->nullable();//vinculo_juridico['PROPIETARIO','TENEDOR'])
			$table->unsignedBigInteger('municipality')->nullable();//municipio
			$table->string('student_name', 120)->nullable();//nombre_estudiante
			$table->bigInteger('identificationcard_estudent')->nullable();//documento_etudiante
			$table->string('grade_student', 5)->nullable();//grado_estudiante
			$table->string('family_relationship', 120)->nullable();//PARENTESCO	
			$table->string('who_receives', 120)->nullable();//quien_recibe	
			$table->time('start_day')->nullable();//inicio jornada	
			$table->time('End_day')->nullable();//finalización jornada	
			$table->bigInteger('identificationcard_representative_group')->nullable();//cedula_representante_grupo
			$table->string('group_representative_name', 60)->nullable();//nombre_representante_grupo
			$table->string('dateofexpedition_representative_group', 100)->nullable();//lugar_fecha_expedicion_cedula_representante_grupo
			$table->enum('signed_contract', ['1', '2'])->nullable();//estado_firma_contrato['Sin firmar','Firmado']
			

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
