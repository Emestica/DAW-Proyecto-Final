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
        Schema::table('opciones', function (Blueprint $table) {
            $table->foreign(['id_opcion_padre'], 'fk_opcion_myself')->references(['id_opcion'])->on('opciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('opciones', function (Blueprint $table) {
            $table->dropForeign('fk_opcion_myself');
        });
    }
};
