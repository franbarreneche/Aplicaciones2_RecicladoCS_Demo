<?php

namespace App\Models;


abstract class Modelo
{

    private $id;
    protected $conexion;
    protected $tabla;

    function __construct($tabla)
    {
        $this->conexion = (new Conexion())->getConexion();
        $this->tabla = $tabla;
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    abstract function getTodos();
    abstract function guardar();
    abstract function buscarPorId($id);
    abstract function actualizar($datos);
    abstract function eliminar($id);

}
