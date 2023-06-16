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
        Schema::create('cliente_direccion', function (Blueprint $table) {
            $table->bigIncrements('id_cliente_direccion');
            $table->unsignedBigInteger('id_cliente')->index('fk_cd_clientes');
            $table->string('direccion', 250)->nullable();
            $table->string('municipio', 75)->nullable();
            $table->string('departamento', 75)->nullable();
            $table->string('pais', 75)->nullable();
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
        Schema::dropIfExists('cliente_direccion');
    }
};
