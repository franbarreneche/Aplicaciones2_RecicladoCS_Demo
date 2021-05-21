<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Rol();
        $admin->setNombre("Admin");
        $admin->guardar();

        $municipal = new Rol();
        $municipal->setNombre("Municipal");
        $municipal->guardar();

        $coordinador = new Rol();
        $coordinador->setNombre("Coordinador");
        $coordinador->guardar();
    }
}
