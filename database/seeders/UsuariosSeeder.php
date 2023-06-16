<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                'contrasenia' => Hash::make('12345'),
                'estado' => 'A'
            ],
            [
                'usuario' => 'aemestica',
                'contrasenia' => Hash::make('12345'),
                'estado' => 'A'
            ],
            [
                'usuario' => 'vruiz',
                'contrasenia' => Hash::make('12345'),
                'estado' => 'A'
            ],
            [
                'usuario' => 'gandrade',
                'contrasenia' => Hash::make('12345'),
                'estado' => 'A'
            ],
            [
                'usuario' => 'user_test',
                'contrasenia' => Hash::make('12345'),
                'estado' => 'A'
            ],
            [
                'usuario' => 'angel.hernandes',
                'contrasenia' => Hash::make('12345'),
                'estado' => 'A'
            ],
            [
                'usuario' => 'vladimir.andrade',
                'contrasenia' => Hash::make('12345'),
                'estado' => 'A'
            ],
            [
                'usuario' => 'mario.escobar',
                'contrasenia' => Hash::make('12345'),
                'estado' => 'A'
            ],
            [
                'usuario' => 'estefay.garcia',
                'contrasenia' => Hash::make('12345'),
                'estado' => 'A'
            ],
            [
                'usuario' => 'maria.albayero',
                'contrasenia' => Hash::make('12345'),
                'estado' => 'A'
            ],
            [
                'usuario' => 'adolfo.perez',
                'contrasenia' => Hash::make('12345'),
                'estado' => 'A'
            ],
            [
                'usuario' => 'willian.garcia',
                'contrasenia' => Hash::make('12345'),
                'estado' => 'A'
            ],
            [
                'usuario' => 'andrea.duran',
                'contrasenia' => Hash::make('12345'),
                'estado' => 'A'
            ],
            [
                'usuario' => 'cristofer.garcia',
                'contrasenia' => Hash::make('12345'),
                'estado' => 'A'
            ],
            [
                'usuario' => 'gabriela.hernandez',
                'contrasenia' => Hash::make('12345'),
                'estado' => 'A'
            ]
        );

        DB::table('usuarios')->insert($datos);
    }
}
