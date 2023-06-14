<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
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
                'categoria' => 'A',
                'descripcion' => 'Se le aplica el mas alto interes',
                'porcentaje' => 20,
                'porcentaje_decimal' => 0.20,
                'estado' => 'A'

               ],
               [
                'categoria' => 'B',
                'descripcion' => 'Se le aplica mayor interes',
                'porcentaje' => 15,
                'porcentaje_decimal' => 0.15,
                'estado' => 'D'

                  ],
                  [
                    'categoria' => 'C',
                'descripcion' => 'Se le aplica menor interes',
                'porcentaje' => 10,
                'porcentaje_decimal' => 0.10,
                'estado' => 'A'

                  ]

        );
        DB::table('categorias')->insert($datos);
        }
    }
