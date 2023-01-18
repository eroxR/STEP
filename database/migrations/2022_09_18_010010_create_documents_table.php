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
        Schema::create('documents', function (Blueprint $table) {
            $table->id('id');//idDocumento
			$table->unsignedBigInteger('documentable_id');//id_relación_tabla
			$table->string('document_name')->unique();//nombre_documento
			$table->string('extension', 6);//extension_archivo_documento
			$table->text('directory');//directorio_O_ruta_documento
			$table->string('documentable_Type');//documento_tipo_modelo_tabla
			
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
};
