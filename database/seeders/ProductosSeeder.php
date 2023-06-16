<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = array([

        'tipo_producto' => 'Prestamo',
        'descripcion' => 'Prestamo para carros',
        'estado' => 'D',

          ],

          [
            'tipo_producto' => 'Tarjeta de credito',
            'descripcion' => ' Tarjeta de credito para realizar compras',
            'estado' => 'A',

          ],

          [
            'tipo_producto' => 'Prestamo',
            'descripcion' => 'Prestamo para uso personal',
            'estado' => 'D',

          ],

          [
            'tipo_producto' => 'Cuenta de ahorro',
            'descripcion' => 'Las cuentas de ahorro permite a los clientes guardar su dinero y recibir intereses sobre los saldos depositados',
            'estado' => 'A',

          ],

          [
            'tipo_producto' => 'Tarjeta de debito',
            'descripcion' => 'La tarjeta de crédito permiten a los clientes realizar compras y pagarlas en un plazo determinado. ',
            'estado' => 'D',

          ]



        );
        DB::table('productos')->insert($data);
        }
    }

