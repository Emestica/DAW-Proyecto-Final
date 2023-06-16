<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array([

            'nombres' => 'Angel Rodrigo',
            'apellidos' => 'Hernandez Alarcon',
            'dui' => '06899579-9',
            'nit' => '0651-2990202-0000',
            'fecha_nacimiento' => Carbon::createFromFormat('d-m-Y', '4-10-2004')->format('Y-m-d'),
            'edad' => '23',
            'correo_electronico' => 'angel.alarcon22@gmail.com',
            'estado' => 'A',
            'usuario_creacion'=> 'root'
        ],
        [
            'nombres' => 'Vladimir Ernesto',
            'apellidos' => 'Andrade Landaverde',
            'dui' => '06850544-9',
            'nit' => '0651-2990245-0545',
            'fecha_nacimiento' => Carbon::createFromFormat('d-m-Y', '4-8-2003')->format('d-m-y'),
            'edad' => '25',
            'correo_electronico' => 'vladimir.andrade224@gmail.com',
            'estado' => 'A',
            'usuario_creacion'=> 'root'


        ],
        [
            'nombres' => 'Maria Julissa',
            'apellidos' => 'Albayero Perez',
            'dui' => '06850533-5',
            'nit' => '0631-2902343-0534',
            'fecha_nacimiento' => Carbon::createFromFormat('d-m-Y', '4-6-2002')->format('d-m-y'),
            'edad' => '28',
            'correo_electronico' => 'mariia.perez3434@gmail.com',
            'estado' => 'D',
            'usuario_creacion'=> 'root'

        ],
        [
            'nombres' => 'Mario Francisco',
            'apellidos' => 'Escobar Garia',
            'dui' => '06850534-2',
            'nit' => '0651-2930235-0542',
            'fecha_nacimiento' => Carbon::createFromFormat('d-m-Y', '4-3-2001')->format('d-m-y'),
            'edad' => '33',
            'correo_electronico' => 'mario.escobar10@gmail.com',
            'estado' => 'D',
            'usuario_creacion'=> 'root'

        ],
        [
            'nombres' => 'Stefay Yemileth',
            'apellidos' => 'Garcia Garcia',
            'dui' => '06850522-9',
            'nit' => '0651-291145-0512',
            'fecha_nacimiento' => Carbon::createFromFormat('d-m-Y', '4-2-2005')->format('d-m-y'),
            'edad' => '33',
            'correo_electronico' => 'stefany.garcia111@gmail.com',
            'estado' => 'A',
            'usuario_creacion'=> 'root'


        ]

        );
        DB::table('clientes')->insert($data);
    }
}
