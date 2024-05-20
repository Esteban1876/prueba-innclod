<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablasConRelaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PRO_PROCESO', function (Blueprint $table){
            $table->id('PRO_ID')->autoIncrement();
            $table->string('PRO_NOMBRE', 50)->notNull();
            $table->string('PRO_PREFIJO', 3)->notNull();
            $table->timestamps();
        });

        Schema::create('TIP_TIPO_DOC', function (Blueprint $table) {
            $table->id('TIP_ID')->autoIncrement();
            $table->string('TIP_NOMBRE', 50)->notNull();
            $table->string('TIP_PREFIJO', 3)->notNull();
            $table->timestamps();
        });
        
        Schema::create('DOC_DOCUMENTO', function (Blueprint $table) {
            $table->id('DOC_ID')->autoIncrement();
            $table->string('DOC_NOMBRE', 50)->notNull();
            $table->string('DOC_CODIGO', 15)->unique()->nullable();
            $table->text('DOC_CONTENIDO', 100)->notNull();

            $table->integer('DOC_ID_TIPO')->nullable();
            $table->integer('DOC_ID_PROCESO')->nullable();
            
            $table->foreign('DOC_ID_TIPO')->references('TIP_ID')->on('TIP_TIPO_DOC');
            $table->foreign('DOC_ID_PROCESO')->references('PRO_ID')->on('PRO_PROCESO');
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
        Schema::dropIfExists('DOC_DOCUMENTO');
        Schema::dropIfExists('PRO_PROCESO');
        Schema::dropIfExists('TIP_TIPO_DOC');
    }
}
