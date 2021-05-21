<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Conexion
{
    private $conexion = NULL;



    public function __construct()
    {
        $this->conexion = DB::connection();
    }

    function getConexion() {
        return $this->conexion;
    }
}
