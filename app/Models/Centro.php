<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Centro extends Modelo {
    private $nombre;
    private $sigla;
    private $horario;
    private $telefono;
    private $coordinador;

    function __construct(){
        parent::__construct('centros');
    }

    //seters y getters
    function getNombre() {
        return $this->nombre;
    }

    function getSigla() {
        return $this->sigla;
    }

    function getHorario() {
        return $this->horario;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCoordinador(){
        return $this->coordinador;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setSigla($sigla) {
        $this->sigla = $sigla;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCoordinador($coordinador) {
        $this->coordinador = $coordinador;
    }

    //implementacion de metodos abstractos heredados de Modelo
    function getTodos() {
        $registros = $this->conexion->table($this->tabla)->get();
        $centros = [];
        foreach($registros as $registro) {
            $centro = new Centro();
            $centro->llenar($registro);
            array_push($centros,$centro);
        }
        return $centros;
    }

    function guardar() {
        $id = $this->conexion->table($this->tabla)->insertGetId([
            "nombre" => $this->nombre,
            "sigla" => $this->sigla,
            "horario" => $this->horario,
            "telefono" => $this->telefono,
            "coordinador_id" => $this->coordinador->getId()
            ]);
        $this->id = $id;
    }

    function buscarPorId($id) {
        $centro = $this->conexion->table($this->tabla)->where('id', $id)->first();
        if(!$centro) throw new ModelNotFoundException('Centro no existente');
        $this->llenar($$centro);
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
        $this->setSigla($registro->sigla);
        $this->setHorario($registro->horario);
        $this->setTelefono($registro->telefono);
        $this->coordinador = (new Ciudadano())->buscarPorId($registro->coordinador_id);
    }
}
