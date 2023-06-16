<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cliente_DireccionSeeder extends Seeder
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
            'direccion' => 'Las chilas Pol 20 casa 15, Comasagua',
            'municipio' => 'Comasagua',
            'departamento'=>'La Libertad',
            'pais'=>'El Salvador',
            'estado' => 'A'

        ],
        [
            'id_cliente' => 3,
            'direccion' => 'Colonia San Benito C C Feria Rosa Cl a Sta Tecla Loc 104-D San Salvador',
            'municipio' => 'San salvador',
            'departamento'=>'San salvador',
            'pais'=>'El Salvador',
            'estado' => 'A'

        ],
        [
            'id_cliente' => 2,
            'direccion' => 'Col. Escalón
            Calle el Mirador y 95 Av',
            'municipio' => 'San salvador',
            'departamento'=>'San salvador',
            'pais'=>'El Salvador',
            'estado' => 'D'

        ],
        [
            'id_cliente' => 4,
            'direccion' => 'Urbanizacion Y Pasaje Palomo 4, Número 10, Colonia Layco. , San Miguelito',
            'municipio' => 'San salvador',
            'departamento'=>'San salvador',
            'pais'=>'El Salvador',
            'estado' => 'A'

        ],

        [

            'id_cliente' => 5,
            'direccion' => 'Urbanizacion Villa Lourdes, Lourdes Colon ',
            'municipio' => 'Lourdes Colon',
            'departamento'=>'La Libertad',
            'pais'=>'El Salvador',
            'estado' => 'D'

        ],






        );
        DB::table('cliente_direccion')->insert($data);
    }
}
