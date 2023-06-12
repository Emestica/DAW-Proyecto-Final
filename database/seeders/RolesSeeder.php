<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
        'rol' => 'Administrador',
        'descripcion' => 'profesional encargado de supervisar y gestionar las operaciones diarias de la institución financiera',
        'estado' => 'A'

        ],
        [
        'rol' => 'Empleado',
        'descripcion' => 'profesional que trabaja en diferentes áreas y roles dentro de la institución financiera',
        'estado' => 'A'

    ],
    [
        'rol' => 'Cliente',
        'descripcion' => 'persona que utiliza los servicios y productos financieros ofrecidos por la institución bancaria',
        'estado' => 'D'

],
        );
        DB::table('roles')->insert($data);

    }
}
