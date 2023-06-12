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

  [
                'estado'=>'A',
                'usuario_creacion'=>'root'
               ],
               [
                   'estado'=>'A',
                   'usuario_creacion'=>'root'
                  ],
                  [
                   'estado'=>'A',
                   'usuario_creacion'=>'root'
                  ],
                  [
                   'estado'=>'A',
                   'usuario_creacion'=>'root'
                  ],
                  [
                   'estado'=>'A',
                   'usuario_creacion'=>'root'
                  ],






        );
        DB::table('usuario_rol')->insert($data);


    }
}
