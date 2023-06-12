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
            'estado'=>'A',
            'usuario_creacion'=>'root'
           ],
           [
               'estado'=>'D',
               'usuario_creacion'=>'root'
              ],
              [
               'estado'=>'A',
               'usuario_creacion'=>'root'
              ],
              [
               'estado'=>'D',
               'usuario_creacion'=>'root'
              ],
              [
               'estado'=>'A',
               'usuario_creacion'=>'root'
              ],
    );
    DB::table('cliente_categoria')->insert($datos);
    }
}
