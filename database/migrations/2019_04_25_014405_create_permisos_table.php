<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_terminacion');
            $table->integer('cantidad_horas');
            //Campo que estara relacionado al codigo del trabajador que solicite el permiso
            $table->string('trabajador',50);
            $table->foreign('trabajador')->references('codigo')->on('trabajadores');
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
        Schema::dropIfExists('permisos');
    }
}
