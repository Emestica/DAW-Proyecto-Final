<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
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
                'usuario' => 'root',
                'contrasenia' => '12345',
                'estado' => 'A'
            ],
            [
                'usuario' => 'aemestica',
                'contrasenia' => '12345',
                'estado' => 'A'
            ],
            [
                'usuario' => 'vruiz',
                'contrasenia' => '12345',
                'estado' => 'A'
            ],
            [
                'usuario' => 'gandrade',
                'contrasenia' => '12345',
                'estado' => 'A'
            ],
            [
                'usuario' => 'user_test',
                'contrasenia' => '12345',
                'estado' => 'A'
            ]
        );

        DB::table('usuarios')->insert($datos);
    }
}
