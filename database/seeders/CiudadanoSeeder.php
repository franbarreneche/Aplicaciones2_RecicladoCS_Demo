<?php

namespace Database\Seeders;

use App\Models\Ciudadano;
use Illuminate\Database\Seeder;

class CiudadanoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->crearCiudadanoAleatorio(40);
    }

    private function crearCiudadanoAleatorio($cantidad) {
        $faker = \Faker\Factory::create('es_ES');
        for($i=0;$i<$cantidad;$i++) {
            $ciudadano = new Ciudadano();
            $ciudadano->setNombre($faker->firstName);
            $ciudadano->setApellido($faker->lastName);
            $ciudadano->setDni(random_int(20000000,50000000));
            $ciudadano->setDomicilio($faker->streetAddress);
            $ciudadano->setTelefono("2926-".random_int(400000,499999));
            $ciudadano->guardar();
        }
    }
}
