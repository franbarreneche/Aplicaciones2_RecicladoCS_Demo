<?php

namespace App\Models;


use Illuminate\Database\Eloquent\ModelNotFoundException;

class Rol extends Modelo
{
    private $nombre;


    function __construct(){
        parent::__construct('roles');
    }

    function getNombre() {
        return $this->nombre;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    //implementacion de metodos abstractos heredados de modelo
    function getTodos() {
        return $this->conexion->table($this->tabla)->get();
    }

    function guardar() {
        $id = $this->conexion->table($this->tabla)->insertGetId(["nombre" => $this->nombre]);
        $this->id = $id;
    }

    function buscarPorId($id) {
        $rol = $this->conexion->table($this->tabla)->where('id', $id)->first();
        if(!$rol) throw new ModelNotFoundException('Rol no existente');
        $this->llenar($rol);
        return $this;
    }

    function actualizar($datos) {
        return '//TODO';
    }

    function eliminar($id) {
        return '//TODO';
    }

    private function llenar($registro) {
        $this->setId($registro->id);
        $this->setNombre($registro->nombre);
    }

}
