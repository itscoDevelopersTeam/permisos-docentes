<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //Este metodo se ejecutara al escribir el comando php artisan migrate
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->string('codigo',50);  
            $table->primary('codigo'); //Definicion del campo codigo como llave primaria
            $table->string('nombre',50);
            $table->string('apellidos',100);
            $table->string('email',50)->unique(); //unique() es para que no pueda haber 2 trabajadores con el mismo email.
            $table->string('password');
            $table->string('telefono',50);
            $table->string('rol',50)->nullable(); //Se permite estar vacio ya que se añadira despues si es un jefe
            $table->timestamps(); //Almacena la fecha de creacion y actualizacion del recurso
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabajadores');
    }
}
