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
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id_empleado');
            $table->string('nombres', 100)->nullable();
            $table->string('apellidos', 100)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->integer('edad')->nullable();
            $table->string('direccion', 250)->nullable();
            $table->string('telefono', 9)->nullable();
            $table->string('celular', 9)->nullable();
            $table->string('correo_electronico_personal', 150)->nullable();
            $table->string('correo_electronico_institucional', 150)->nullable();
            $table->string('dui', 10)->nullable();
            $table->string('nit', 25)->nullable();
            $table->date('fecha_ingreso')->nullable();
            $table->date('fecha_salida')->nullable();
            $table->string('area_trabajo', 100)->nullable();
            $table->char('estado', 1)->nullable();
            $table->dateTime('fecha_creacion')->nullable()->useCurrent();
            $table->dateTime('fecha_modificacion')->nullable();
            $table->string('usuario_creacion', 25)->nullable();
            $table->string('usuario_modificacion', 25)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
