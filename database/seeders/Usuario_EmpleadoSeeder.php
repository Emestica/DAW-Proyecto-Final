<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Usuario_EmpleadoSeeder extends Seeder
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
                'id_empleado' => 1,
                'id_usuario' => 11,
                'estado'=>'A',
                'usuario_creacion'=>'root'
               ],
               [
                'id_empleado' => 2,
                'id_usuario' => 12,
                   'estado'=>'A',
                   'usuario_creacion'=>'root'
                  ],
                  [
                    'id_empleado' => 3,
                'id_usuario' => 13,
                   'estado'=>'D',
                   'usuario_creacion'=>'root'
                  ],
                  [
                    'id_empleado' => 4,
                'id_usuario' => 14,
                   'estado'=>'D',
                   'usuario_creacion'=>'root'
                  ],
                  [
                    'id_empleado' => 5,
                'id_usuario' => 15,
                   'estado'=>'A',
                   'usuario_creacion'=>'root'
                  ]

        );
        DB::table('usuario_empleado')->insert($data);
    }
}
