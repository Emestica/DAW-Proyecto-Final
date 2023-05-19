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
        Schema::table('cliente_categoria', function (Blueprint $table) {
            $table->foreign(['id_categoria'], 'fk_cc_categorias')->references(['id_categoria'])->on('categorias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_cliente'], 'fk_cc_clientes')->references(['id_cliente'])->on('clientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cliente_categoria', function (Blueprint $table) {
            $table->dropForeign('fk_cc_categorias');
            $table->dropForeign('fk_cc_clientes');
        });
    }
};
