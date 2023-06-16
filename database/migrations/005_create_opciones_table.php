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
        Schema::create('opciones', function (Blueprint $table) {
            $table->bigIncrements('id_opcion');
            $table->unsignedBigInteger('id_opcion_padre')->nullable()->index('fk_opcion_myself');
            $table->string('opcion', 150)->nullable();
            $table->string('descripcion', 150)->nullable();
            $table->char('tipo_opcion', 1)->nullable();
            $table->string('imagen', 300)->nullable();
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
        Schema::dropIfExists('opciones');
    }
};
