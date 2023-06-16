<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriasSeeder::class,
            ClienteSeeder::class,
            RolesSeeder::class,
            UsuariosSeeder::class,
            ProductosSeeder::class,
            EmpleadosSeeder::class,
            Cliente_CategoriasSeeder::class,
            Cliente_NumeroSeeder::class,
            Cliente_DireccionSeeder::class,
            Cliente_ProductoSeeder::class,
            Usuario_RolSeeder::class,
            Usuario_ClienteSeeder::class,
            Usuario_EmpleadoSeeder::class
        ]);
    }
}
