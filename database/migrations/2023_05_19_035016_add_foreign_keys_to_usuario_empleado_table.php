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
        Schema::table('usuario_empleado', function (Blueprint $table) {
            $table->foreign(['id_empleado'], 'fk_ue_empleados')->references(['id_empleado'])->on('empleados')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_usuario'], 'fk_ue_usuarios')->references(['id_usuario'])->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuario_empleado', function (Blueprint $table) {
            $table->dropForeign('fk_ue_empleados');
            $table->dropForeign('fk_ue_usuarios');
        });
    }
};
