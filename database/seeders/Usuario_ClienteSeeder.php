<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Usuario_ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $data = array(
        [
            'id_cliente' => 1,
            'id_usuario' => 6,
         'estado'=>'A',
         'usuario_creacion'=>'root'
        ],
        [
            'id_cliente' => 2,
            'id_usuario' => 7,
            'estado'=>'D',
            'usuario_creacion'=>'root'
           ],
           [
            'id_cliente' => 3,
            'id_usuario' => 8,
            'estado'=>'A',
            'usuario_creacion'=>'root'
           ],
           [
            'id_cliente' => 4,
            'id_usuario' => 9,
            'estado'=>'D',
            'usuario_creacion'=>'root'
           ],
           [
            'id_cliente' => 5,
            'id_usuario' => 10,
            'estado'=>'A',
            'usuario_creacion'=>'root'
           ],
    );

    DB::table('usuario_cliente')->insert($data);
    }
}
