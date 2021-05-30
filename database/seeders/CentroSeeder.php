<?php

namespace Database\Seeders;

use App\Models\Centro;
use App\Models\Ciudadano;
use Illuminate\Database\Seeder;

class CentroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //como este seeder se ejecuta despues del seeder de usuarios,
        //puedo asegurarse de que los ciudadanos id 1 a 9 ya existen
        $this->crearCentroDesdeArreglo([
            "nombre" => "Planta de Reciclado de Cnel. Suárez",
            "sigla" => "PRS",
            "horario" => "de 9 a 16hs",
            "telefono" => "2926-422123",
            "coordinador_id" => 1
        ]);
        $this->crearCentroDesdeArreglo([
            "nombre" => "Centro de la Cooperativa Amanecer",
            "sigla" => "CCA",
            "horario" => "de 9 a 16hs",
            "telefono" => "2926-422456",
            "coordinador_id" => 2
        ]);
        $this->crearCentroDesdeArreglo([
            "nombre" => "Planta de Tratamiento Eco Huanguelén",
            "sigla" => "PEH",
            "horario" => "de 9 a 16hs",
            "telefono" => "2926-422987",
            "coordinador_id" => 3
        ]);
        $this->crearCentroDesdeArreglo([
            "nombre" => "Delegación Municipal de Santa María",
            "sigla" => "DSN",
            "horario" => "de 9 a 16hs",
            "telefono" => "2926-422741",
            "coordinador_id" => 4
        ]);
        $this->crearCentroDesdeArreglo([
            "nombre" => "Delegación Municipal de San José",
            "sigla" => "DSJ",
            "horario" => "de 9 a 16hs",
            "telefono" => "2926-422963",
            "coordinador_id" => 5
        ]);
        $this->crearCentroDesdeArreglo([
            "nombre" => "Delegación Municipal de Santa Trinidad",
            "sigla" => "DST",
            "horario" => "de 9 a 16hs",
            "telefono" => "2926-422852",
            "coordinador_id" => 6
        ]);
        $this->crearCentroDesdeArreglo([
            "nombre" => "Delegación Municipal de Pasman",
            "sigla" => "DSP",
            "horario" => "de 9 a 16hs",
            "telefono" => "2926-422159",
            "coordinador_id" => 7
        ]);
        $this->crearCentroDesdeArreglo([
            "nombre" => "Delegación Municipal de Cura Malal",
            "sigla" => "DCM",
            "horario" => "de 9 a 16hs",
            "telefono" => "2926-422753",
            "coordinador_id" => 8
        ]);
        $this->crearCentroDesdeArreglo([
            "nombre" => "Delegación Municipal de Villa Arcadia",
            "sigla" => "DVA",
            "horario" => "de 9 a 16hs",
            "telefono" => "2926-426348",
            "coordinador_id" => 9
        ]);
    }

    private function crearCentroDesdeArreglo($datos) {
        $centro = new Centro();
        $centro->setNombre($datos['nombre']);
        $centro->setSigla($datos['sigla']);
        $centro->setHorario($datos['horario']);
        $centro->setTelefono($datos['telefono']);
        $centro->setCoordinador((new Ciudadano())->buscarPorId($datos['coordinador_id']));
        $centro->guardar();
    }
}
