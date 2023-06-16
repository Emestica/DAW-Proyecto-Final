<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cliente_ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = array([

        'id_cliente' => 1,
        'id_producto' => 1,
        'valor_neto'=> 1000,
        'valor_total' =>1200 ,
        'valor_pagado' => 500,
        'valor_interes' => 20.00,
        'valor_interes_pagado' => 9.00 ,
        'valor_cuota' => 100.00,
        'cantidad_meses' => 12,
        'fecha_inicio' =>Carbon::create(2023, 1, 1)->format('Y-m-d'),
        'fecha_finalizacion_estimada' =>Carbon::create(2024, 1, 1)->format('Y-m-d'),
        'fecha_finalizacion' =>Carbon::create(2024, 1, 1)->format('Y-m-d'),
        'estado' => 'A'



      ],

      [
        'id_cliente' => 3,
        'id_producto' => 1,
        'valor_neto'=> 10000,
        'valor_total' =>11000 ,
        'valor_pagado' => 5550,
        'valor_interes' => 10.00,
        'valor_interes_pagado' => 5.00 ,
        'valor_cuota' => 916.67,
        'cantidad_meses' => 12,
        'fecha_inicio' =>Carbon::create(2023, 2, 20)->format('Y-m-d'),
        'fecha_finalizacion_estimada' =>Carbon::create(2024, 2, 20)->format('Y-m-d'),
        'fecha_finalizacion' =>Carbon::create(2024, 2, 20)->format('Y-m-d'),
        'estado' => 'D'

      ],

      [
        'id_cliente' => 5,
        'id_producto' => 1,
        'valor_neto'=> 5000,
        'valor_total' =>5750 ,
        'valor_pagado' => 2875,
        'valor_interes' => 15.00,
        'valor_interes_pagado' => 7.50 ,
        'valor_cuota' => 479.17,
        'cantidad_meses' => 12,
        'fecha_inicio' =>Carbon::create(2023, 4, 20)->format('Y-m-d'),
        'fecha_finalizacion_estimada' =>Carbon::create(2024, 4, 20)->format('Y-m-d'),
        'fecha_finalizacion' =>Carbon::create(2024, 4, 20)->format('Y-m-d'),
        'estado' => 'A'

      ],

      [
        'id_cliente' => 4,
        'id_producto' => 1,
        'valor_neto'=> 1000,
        'valor_total' =>1100 ,
        'valor_pagado' => 550,
        'valor_interes' => 10.00,
        'valor_interes_pagado' => 5.00 ,
        'valor_cuota' => 91.67 ,
        'cantidad_meses' => 12,
        'fecha_inicio' =>Carbon::create(2023, 6, 1)->format('Y-m-d'),
        'fecha_finalizacion_estimada' =>Carbon::create(2024, 6, 1)->format('Y-m-d'),
        'fecha_finalizacion' =>Carbon::create(2024, 6, 1)->format('Y-m-d'),
        'estado' => 'A'

      ],

      [
        'id_cliente' => 2,
        'id_producto' => 1,
        'valor_neto'=> 8000,
        'valor_total' => 8800,
        'valor_pagado' => 8000,
        'valor_interes' => 10.00,
        'valor_interes_pagado' => 8.00 ,
        'valor_cuota' => 733.33,
        'cantidad_meses' => 12,
        'fecha_inicio' =>Carbon::create(2023, 6, 13)->format('Y-m-d'),
        'fecha_finalizacion_estimada' =>Carbon::create(2024, 6, 13)->format('Y-m-d'),
        'fecha_finalizacion' =>Carbon::create(2024, 6, 13)->format('Y-m-d'),
        'estado' => 'A'

      ]



    );
    DB::table('cliente_producto')->insert($data);
    }
}
