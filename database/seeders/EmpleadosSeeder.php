<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array([

            'nombres' => 'Angel Adolfo',
            'apellidos' => 'Hernandez Perez',
            'fecha_nacimiento' => Carbon::create(2000, 10, 4)->format('y-m-d'),
            'edad' => '22',
            'direccion' => 'El trebol 2 Pol 10 Casa 20, Lourdes colon',
            'telefono' => '2322-0000',
            'celular' => '6130-9010',
            'correo_electronico_personal' => 'angel2000@gmail.com',
            'correo_electronico_institucional' => 'angel.hernandez22@ban.com',
            'dui' => '06899579-9',
            'nit' => '0651-2990202-0000',
            'fecha_ingreso' => Carbon::create(2022, 4, 1)->format('y-m-d'),
            'fecha_salida' => Carbon::create(2023, 1, 20)->format('y-m-d'),
            'area_trabajo' => 'Contabilidad',
            'estado' => 'A',
            'usuario_creacion'=> 'root'

        ],
        [

            'nombres' => 'William Alexander',
            'apellidos' => 'Garcia Garcia',
            'fecha_nacimiento' => Carbon::create(2000, 10, 4)->format('y-m-d'),
            'edad' => '25',
            'direccion' => 'Monserrat Pol 2 casa 5, El capulin',
            'telefono' => '2223-2000',
            'celular' => '7190-4960',
            'correo_electronico_personal' => 'WilliamAlexander90@gmail.com',
            'correo_electronico_institucional' => 'william.Garcia47@ban.com',
            'dui' => '06569788-8',
            'nit' => '0754-2440204-0001',
            'fecha_ingreso' => Carbon::create(2022, 4, 1)->format('y-m-d'),
            'fecha_salida' => Carbon::create(2023, 1, 20)->format('y-m-d'),
            'area_trabajo' => 'Ventanilla',
            'estado' => 'D',
            'usuario_creacion'=> 'root'

        ],
        [

            'nombres' => 'Andrea Stefany',
            'apellidos' => 'Alberto Duran',
            'fecha_nacimiento' => Carbon::create(2000, 10, 4)->format('y-m-d'),
            'edad' => '20',
            'direccion' => 'Las pedreras 1 Pol 20 casa 12, Lourdes',
            'telefono' => 2023-2020,
            'celular' => 7180-4040,
            'correo_electronico_personal' => 'andrea2003@gmail.com',
            'correo_electronico_institucional' => 'andrea.alberto30@ban.com',
            'dui' => '06577799-6',
            'nit' => '0753-2302344-0032',
            'fecha_ingreso' => Carbon::create(2022, 4, 1)->format('y-m-d'),
            'fecha_salida' => Carbon::create(2023, 1, 20)->format('y-m-d'),
            'area_trabajo' => 'Créditos',
            'estado' => 'A',
            'usuario_creacion'=> 'root'

        ],
        [

            'nombres' => 'Cristofer Alejandro',
            'apellidos' => 'Javier Gracia',
            'fecha_nacimiento' => Carbon::create(1990, 6, 19)->format('y-m-d'),
            'edad' => '33',
            'direccion' => 'Jerusalen 3 Pol 9 casa 1, Colon',
            'telefono' => '2020-4545',
            'celular' => '6140-0620',
            'correo_electronico_personal' => 'cristoferale1990@gmail.com',
            'correo_electronico_institucional' => 'cristofer.javier23@ban.com',
            'dui' => '43071777-9',
            'nit' => '0354-234562-0233',
            'fecha_ingreso' => Carbon::create(2022, 4, 1)->format('y-m-d'),
            'fecha_salida' => Carbon::create(2023, 1, 20)->format('y-m-d'),
            'area_trabajo' => 'Atención al cliente',
            'estado' => 'D',
            'usuario_creacion'=> 'root'

        ],
        [

            'nombres' => 'Gabriela Fernanda',
            'apellidos' => 'Hernandez Garcia',
            'fecha_nacimiento' => Carbon::create(1995, 11, 1)->format('y-m-d'),
            'edad' => '28',
            'direccion' => 'Las chilas Pol 20 casa 15, Comasagua',
            'telefono' => '2322-3010',
            'celular' => '7190-2040',
            'correo_electronico_personal' => 'gabrielagarcia22@gmail.com',
            'correo_electronico_institucional' => 'gabriela.garcia22@ban.com',
            'dui' => '05568890-9',
            'nit' => '0434-2444203-4301',
            'fecha_ingreso' => Carbon::create(2022, 4, 1)->format('y-m-d'),
            'fecha_salida' => Carbon::create(2023, 1, 20)->format('y-m-d'),
            'area_trabajo' => 'Gerencia',
            'estado' => 'A',
            'usuario_creacion'=> 'root'

        ]

        );

        DB::table('empleados')->insert($data);
    }
}
