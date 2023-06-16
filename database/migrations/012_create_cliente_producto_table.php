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
        Schema::create('cliente_producto', function (Blueprint $table) {
            $table->bigIncrements('id_cliente_producto');
            $table->unsignedBigInteger('id_cliente')->index('fk_cp_clientes');
            $table->unsignedBigInteger('id_producto')->index('fk_cp_productos');
            $table->decimal('valor_neto', 18)->nullable();
            $table->decimal('valor_total', 18)->nullable();
            $table->decimal('valor_pagado', 18)->nullable();
            $table->decimal('valor_interes', 18)->nullable();
            $table->decimal('valor_interes_pagado', 18)->nullable();
            $table->decimal('valor_cuota', 18)->nullable();
            $table->integer('cantidad_meses');
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_finalizacion_estimada')->nullable();
            $table->date('fecha_finalizacion')->nullable();
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
        Schema::dropIfExists('cliente_producto');
    }
};
