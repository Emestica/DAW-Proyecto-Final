<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cliente_CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $datos = array(
            [
                'id_cliente' => 1,
                'id_categoria' => 1,
                'estado'=>'A',
                'usuario_creacion'=>'root'
           ],
           [
            'id_cliente' => 2,
            'id_categoria' => 2,
               'estado'=>'D',
               'usuario_creacion'=>'root'
              ],
              [
                'id_cliente' => 3,
                'id_categoria' => 3,
               'estado'=>'A',
               'usuario_creacion'=>'root'
              ],
              [
                'id_cliente' => 4,
                'id_categoria' => 1,
               'estado'=>'D',
               'usuario_creacion'=>'root'
              ],
              [
                'id_cliente' => 5,
                'id_categoria' => 2,
               'estado'=>'A',
               'usuario_creacion'=>'root'
              ],
    );
    DB::table('cliente_categoria')->insert($datos);
    }
}
