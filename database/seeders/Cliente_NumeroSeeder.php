<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cliente_NumeroSeeder extends Seeder
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

                'numero'=>'6130-7180',
                'tipo' => 'numero personal',
                'estado'=>'A'

            ],

            [

                'numero'=>'2214-2323',
                'tipo' => 'numero de oficina',
                'estado'=>'D'

            ],

            [

                'numero'=>'6163-8019',
                'tipo' => 'numero personal',
                'estado'=>'A'

            ],

            [

                'numero'=>'6130-7777',
                'tipo' => 'numero de casa',
                'estado'=>'A'

            ],

            [

                'numero'=>'2232-2000',
                'tipo' => 'numero de oficina',
                'estado'=>'D'

            ],
            );
            DB::table('cliente_numero')->insert($data);
    }
}
