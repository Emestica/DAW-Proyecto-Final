<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Usuario_RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(

  [              'id_usuario' => 1,
                  'id_rol' => 1,
                'estado'=>'A',
                'usuario_creacion'=>'root'
               ],
               [
                'id_usuario' => 3,
                  'id_rol' => 2,
                   'estado'=>'A',
                   'usuario_creacion'=>'root'
                  ],
                  [
                    'id_usuario' => 2,
                  'id_rol' => 2,
                   'estado'=>'A',
                   'usuario_creacion'=>'root'
                  ],
                  ['id_usuario' => 5,
                  'id_rol' => 3,
                   'estado'=>'A',
                   'usuario_creacion'=>'root'
                  ],
                  [
                    'id_usuario' => 4,
                  'id_rol' => 1,
                   'estado'=>'A',
                   'usuario_creacion'=>'root'
                  ],






        );
        DB::table('usuario_rol')->insert($data);


    }
}
