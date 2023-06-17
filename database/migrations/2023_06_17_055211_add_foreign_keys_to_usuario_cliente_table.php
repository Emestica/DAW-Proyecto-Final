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
        Schema::table('usuario_cliente', function (Blueprint $table) {
            $table->foreign(['id_usuario'], 'fk_uc_usuarios')->references(['id_usuario'])->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_cliente'], 'fk_uc_clientes')->references(['id_cliente'])->on('clientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuario_cliente', function (Blueprint $table) {
            $table->dropForeign('fk_uc_usuarios');
            $table->dropForeign('fk_uc_clientes');
        });
    }
};
