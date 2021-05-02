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
        Rol::create(["nombre" => "Admin"]);
        Rol::create(["nombre" => "Municipal"]);
        Rol::create(["nombre" => "Coordinador"]);
    }
}
