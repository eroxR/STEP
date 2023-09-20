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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('identification')->nullable();//identificacion
			$table->string('identificationcard')->unique()->nullable();//cedula
            $table->string('nit')->unique()->nullable();//NIT
			$table->string('firstname', 25)->nullable();//primer_nombre
			$table->string('secondname', 25)->nullable();//segundo_nombre
			$table->string('lastname', 25)->nullable();//apellido_paterno
			$table->string('motherslastname', 25)->nullable();//apellido_materno
			$table->date('birthdate')->nullable();//fecha_nacimiento
			$table->integer('age')->nullable();//edad
			$table->enum('type_sex', ['F', 'M'])->nullable();//tipo_sexo
			$table->unsignedBigInteger('country')->nullable();//pais
			$table->unsignedBigInteger('Department')->nullable();//departamento
			$table->unsignedBigInteger('city')->nullable();//ciudad
			$table->string('address')->nullable();//direccion
			$table->string('phone')->nullable();//telefono
			$table->string('phone_cellular')->nullable();//telefono_celular
			$table->unsignedBigInteger('eps')->nullable();//eps
			$table->enum('eps_status', ['0', '1', '2'])->nullable();//estado_eps['Desactualizado','Actualizado','Pendiente']
			$table->date('date_eps')->nullable();//fecha_eps
			$table->unsignedBigInteger('blood_type')->nullable();//tipo_sangre
			$table->unsignedBigInteger('pension')->nullable();//pension
			$table->enum('pension_status', ['0', '1', '2'])->nullable();//estado_pension['Desactualizado','Actualizado','Pendiente']
			$table->date('date_pension')->nullable();//fecha_pension
			$table->unsignedBigInteger('layoffs')->nullable();//cesantias
			$table->enum('status_layoffs', ['0', '1', '2'])->nullable();//estado_cesantias['Desactualizado','Actualizado','Pendiente']
			$table->date('date_layoffs')->nullable();//fecha_cesantias
			$table->unsignedBigInteger('arl')->nullable();//arl
			$table->enum('arl_status', ['0', '1', '2'])->nullable();//estado_arl['Desactualizado','Actualizado','Pendiente']
			$table->date('arl_date')->nullable();//fecha_arl
			$table->unsignedBigInteger('compensationbox')->nullable();//caja_compensacion
			$table->enum('compensationbox_status', ['0', '1', '2'])->nullable();//estado_caja_compensacion['Desactualizado','Actualizado','Pendiente']
			$table->date('date_compensationbox')->nullable();//fecha_caja_compensacion
			$table->enum('user_state', ['1', '2', '3'])->nullable();//estado['Inactivo','Activo','Bloqueado']
			$table->date('user_entry_date')->nullable();//fecha_ingre_usuario
			$table->date('date_withdrawal_user')->nullable();//fecha_retiro_usuario
			$table->unsignedBigInteger('charge')->nullable();//cargo
			$table->unsignedBigInteger('usertype')->nullable();//tipo_usuario
			$table->unsignedBigInteger('civil_status')->nullable();//estado_civil
			$table->unsignedBigInteger('family_document_type')->nullable();//tipo_documento_familiar
			$table->string('family_names')->nullable();//nombres_familiar
			$table->unsignedBigInteger('relationship')->nullable();//parentezco
			$table->string('family_address', 150)->nullable();//direccion_familiar
			$table->string('family_phone')->nullable();//telefono_familiar
			$table->string('family_phone_cellular')->nullable();//celular_familiar
			$table->unsignedBigInteger('city_birth')->nullable();//ciudad_nacimiento
			$table->string('place_expedition_identificationcard')->nullable();//lugar_expedicion_cedula
			$table->string('identificationcard_family')->nullable();//cedula familiar
			$table->unsignedBigInteger('bonding_type')->nullable();//tipo_vinculacion
			$table->decimal('weight')->nullable();//peso
			$table->decimal('pant_size', $precision = 5, $scale = 2)->nullable();//talla_pantalon
			$table->string('shirt_size', 4)->nullable();//talla_camisa
			$table->enum('shoe_size', ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'])->nullable();;//talla_zapato
			$table->unsignedBigInteger('education_level')->nullable();//nivel_educativo
			$table->string('educational_institution', 150)->nullable();//institucion_educativa
			$table->year('last_year')->nullable();//ultimo_año
			$table->date('study_end_date')->nullable();//fecha_finalizacion_estudio
			$table->string('obtained_title')->nullable();//titulo_obtenido
			$table->string('last_company_name', 150)->nullable();//nombre_ultima_empresa
			$table->string('charges_last_company')->nullable();//cargo_ultima_empresa
			$table->date('start_date_last_company')->nullable();//fecha_inicio_ultima_empresa
			$table->date('date_end_last_company')->nullable();//fecha_finalizacion_ultima_empresa
			$table->text('functions_performed')->nullable();//funciones_desempenadas
			$table->string('supplier_name', 150)->nullable();//nombre_proveedor
			$table->string('company_name_provider', 150)->nullable();//razon_social_proovedor
			$table->string('commercial_reason_supplier', 150)->nullable();//razon_comercial_proveedor
			$table->string('supplier_web_page')->nullable();//pagina_web_proveedor
			$table->unsignedBigInteger('supplier_category')->nullable();//categoria_proveedor
			$table->unsignedBigInteger('economic_activity')->nullable();//actividad_economica
			$table->unsignedBigInteger('products_and_services')->nullable();//productos_y_servicios
			$table->text('supplier_description')->nullable();//descripcion_proveedor
			$table->decimal('salary', $precision = 12, $scale = 2)->nullable();//salario
			$table->decimal('aid_transport', $precision = 12, $scale = 2)->nullable();//auxilio_transporte
			$table->unsignedBigInteger('work_area')->nullable();//area_trabajo
			$table->string('username', 25)->unique();//nombre_usuario
	
			
			
			$table->foreign('country')->references('id')->on('countries')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('Department')->references('id')->on('provinces')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('city')->references('id')->on('cities')->onDelete('set null');
			$table->foreign('identification')->references('id')->on('identifications')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('civil_status')->references('id')->on('marital_statuses')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('eps')->references('id')->on('eps')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('pension')->references('id')->on('pensions')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('layoffs')->references('id')->on('layoffs')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('arl')->references('id')->on('arls')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('compensationbox')->references('id')->on('compensation_boxes')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('blood_type')->references('id')->on('blood_types')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('bonding_type')->references('id')->on('bondings')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('work_area')->references('id')->on('work_areas')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('products_and_services')->references('id')->on('products_and_services')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('economic_activity')->references('id')->on('economic_activities')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('supplier_category')->references('id')->on('supplier_categories')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('charge')->references('id')->on('charges')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('usertype')->references('id')->on('usertypes')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('family_document_type')->references('id')->on('identifications')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('relationship')->references('id')->on('relationships')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('city_birth')->references('id')->on('cities')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('education_level')->references('id')->on('educational_levels')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn( 'identification',
                                'identificationcard',
                                'firstname',
                                'secondname',
                                'lastname',
                                'motherslastname',
                                'birthdate',
                                'age',
                                'type_sex',
                                'country',
                                'Department',
                                'city',
                                'address',
                                'phone',
                                'phone_cellular',
                                'eps',
                                'eps_status',
                                'date_eps',
                                'blood_type',
                                'pension',
                                'pension_status',
                                'date_pension',
                                'layoffs',
                                'status_layoffs',
                                'date_layoffs',
                                'arl',
                                'arl-status',
                                'arl_date',
                                'compensationbox',
                                'compensationbox_status',
                                'date_compensationbox',
                                'user_state',
                                'user_entry_date',
                                'date_withdrawal_user',
                                'charge',
                                'usertype',
                                'civil_status',
                                'family_document_type',
                                'family_names',
                                'relationship',
                                'family_address',
                                'family_phone',
                                'family_phone_cellular',
                                'city_birth',
                                'place_expedition_identificationcard',
                                'binding_type',
                                'weight',
                                'pant_size',
                                'shirt_size',
                                'shoe_size',
                                'education_level',
                                'educational_institution',
                                'last_year',
                                'study_end_date',
                                'obtained_title',
                                'last_company_name',
                                'charges_last_company',
                                'start_date_last_company',
                                'date_end_last_company',
                                'functions_performed',
                                'supplier_name',
                                'company_name_provider',
                                'commercial_reason_supplier',
                                'supplier_web_page',
                                'supplier_category',
                                'economic_activity',
                                'products_and_services',
                                'supplier_description',
                                'salary',
                                'aid_transport',
                                'work_area',
                                'username');

        
        });
    }
};
