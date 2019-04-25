<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->string('clave',50);  
            $table->primary('clave');  //Definicion del campo clave como llave primaria
            $table->string('nombre',100);
            $table->string('jefe',50);
            $table->foreign('jefe')->references('codigo')->on('trabajadores'); //Llave foranea referenciando a la tabla trabajadores
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
        Schema::dropIfExists('areas');
    }
}
