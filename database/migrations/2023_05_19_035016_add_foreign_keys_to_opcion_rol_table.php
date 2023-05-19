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
        Schema::table('opcion_rol', function (Blueprint $table) {
            $table->foreign(['id_opcion'], 'fk_or_opciones')->references(['id_opcion'])->on('opciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_rol'], 'fk_or_roles')->references(['id_rol'])->on('roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('opcion_rol', function (Blueprint $table) {
            $table->dropForeign('fk_or_opciones');
            $table->dropForeign('fk_or_roles');
        });
    }
};
