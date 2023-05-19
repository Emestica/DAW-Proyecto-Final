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
        Schema::table('usuario_rol', function (Blueprint $table) {
            $table->foreign(['id_rol'], 'fk_ur_roles')->references(['id_rol'])->on('roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_usuario'], 'fk_ur_usuarios')->references(['id_usuario'])->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuario_rol', function (Blueprint $table) {
            $table->dropForeign('fk_ur_roles');
            $table->dropForeign('fk_ur_usuarios');
        });
    }
};
