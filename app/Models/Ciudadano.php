<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Ciudadano extends Modelo {
    private $nombre;
    private $apellido;
    private $dni;
    private $domicilio;
    private $telefono;

    function __construct(){
        parent::__construct('ciudadanos');
    }

    //seters y getters
    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getDni() {
        return $this->dni;
    }

    function getDomicilio() {
        return $this->domicilio;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setDomicilio($domicilio) {
        $this->domicilio = $domicilio;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    //implementacion de metodos abstractos heredados de Modelo
    function getTodos() {
        $registros = $this->conexion->table($this->tabla)->get();
        $ciudadanos = [];
        foreach($registros as $registro) {
            $ciudadano = new Ciudadano();
            $ciudadano->llenar($registro);
            array_push($ciudadanos,$ciudadano);
        }
        return $ciudadanos;
    }

    function guardar() {
        $id = $this->conexion->table($this->tabla)->insertGetId([
            "nombre" => $this->nombre,
            "apellido" => $this->apellido,
            "dni" => $this->dni,
            "domicilio" => $this->domicilio,
            "telefono" => $this->telefono
            ]);
        $this->id = $id;
    }

    function buscarPorId($id) {
        $ciudadano = $this->conexion->table($this->tabla)->where('id', $id)->first();
        if(!$ciudadano) throw new ModelNotFoundException('Ciudadano no existente');
        $this->llenar($$ciudadano);
        return $this;
    }

    function actualizar($datos) {
        //TODO
    }

    function eliminar($id) {
        //TODO
    }

    function llenar($registro) {
        $this->setId($registro->id);
        $this->setNombre($registro->nombre);
        $this->setApellido($registro->apellido);
        $this->setDni($registro->dni);
        $this->setDomicilio($registro->domicilio);
        $this->setTelefono($registro->telefono);
    }
}
