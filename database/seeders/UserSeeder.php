<?php

namespace Database\Seeders;

use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Usuario();
        $admin->setUsername("admin");
        $admin->setEmail("admin@admin.com");
        $admin->setPassword(Hash::make('123456'));
        $admin->setRol((new Rol())->buscarPorId(1)); //el 1 es el admin
        $admin->guardar();

        $municipal = new Usuario();
        $municipal->setUsername("juan_municipal");
        $municipal->setEmail("juan@gmail.com");
        $municipal->setPassword(Hash::make('123456'));
        $municipal->setRol((new Rol())->buscarPorId(2)); //el 1 es el municipal
        $municipal->guardar();

        $coordinador = new Usuario();
        $coordinador->setUsername("ana_coordiandora");
        $coordinador->setEmail("ana@gmail.com");
        $coordinador->setPassword(Hash::make('123456'));
        $coordinador->setRol((new Rol())->buscarPorId(3)); //el 1 es el coordinador
        $coordinador->guardar();
    }
}
