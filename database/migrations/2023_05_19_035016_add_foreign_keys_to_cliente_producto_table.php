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
        Schema::table('cliente_producto', function (Blueprint $table) {
            $table->foreign(['id_cliente'], 'fk_cp_clientes')->references(['id_cliente'])->on('clientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_producto'], 'fk_cp_productos')->references(['id_producto'])->on('productos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cliente_producto', function (Blueprint $table) {
            $table->dropForeign('fk_cp_clientes');
            $table->dropForeign('fk_cp_productos');
        });
    }
};
