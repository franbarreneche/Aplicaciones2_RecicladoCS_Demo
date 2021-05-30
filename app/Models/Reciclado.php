<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Reciclado extends Modelo {
    private $transporte;
    private $objeto;
    private $fecha_contacto;
    private $fecha_recoleccion;
    private $ciudadano;
    private $recolector;
    private $centro;

    const TRANSPORTES = ["Pie","Auto","Moto","Camioneta"];
    const OBJETOS = ["Chatarra","Electronicos","Otros"];


    function __construct(){
        parent::__construct('reciclados');
    }

    //seters y getters
    function getTransporte() {
        return $this->transporte;
    }

    function getObjeto() {
        return $this->objeto;
    }

    function getFechaContacto() {
        return $this->fecha_contacto;
    }

    function getFechaRecoleccion() {
        return $this->fecha_recoleccion;
    }

    function getCiudadano() {
        return $this->ciudadano;
    }

    function getRecolector(){
        return $this->recolector;
    }

    function getCentro(){
        return $this->centro;
    }

    function setTransporte($transporte) {
        $this->transporte = $transporte;
    }

    function setObjeto($objeto) {
        $this->objeto = $objeto;
    }

    function setFechaContacto($fecha) {
        $this->fecha_contacto = $fecha;
    }

    function setFechaRecoleccion($fecha) {
        $this->fecha_recoleccion = $fecha;
    }

    function setCiudadano($ciudadano) {
        $this->ciudadano = $ciudadano;
    }

    function setRecolector($recolector) {
        $this->recolector = $recolector;
    }

    function setCentro($centro) {
        $this->centro = $centro;
    }


    //implementacion de metodos abstractos heredados de Modelo
    function getTodos() {
        $registros = $this->conexion->table($this->tabla)->get();
        $reciclados = [];
        foreach($registros as $registro) {
            $reciclado = new Reciclado();
            $reciclado->llenar($registro);
            array_push($reciclados,$reciclado);
        }
        return $reciclados;
    }

    function guardar() {
        $id = $this->conexion->table($this->tabla)->insertGetId([
            "transporte" => $this->transporte,
            "objeto" => $this->objeto,
            "fecha_contacto" => $this->fecha_contacto,
            "fecha_recoleccion" => $this->fecha_recoleccion,
            "ciudadano_id" => $this->ciudadano->getId(),
            "recolector_id" => $this->recolector->getId(),
            "centro_id" => $this->centro->getId()
            ]);
        $this->id = $id;
    }

    function buscarPorId($id) {
        $reciclado = $this->conexion->table($this->tabla)->where('id', $id)->first();
        if(!$reciclado) throw new ModelNotFoundException('Reciclado no existente');
        $this->llenar($reciclado);
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
        $this->setTransporte($registro->transporte);
        $this->setObjeto($registro->objeto);
        $this->setFechaContacto($registro->fecha_contacto);
        $this->setFechaRecoleccion($registro->fecha_recoleccion);
        $this->ciudadano = (new Ciudadano())->buscarPorId($registro->ciudadano_id);
        $this->recolector = (new Ciudadano())->buscarPorId($registro->recolector_id);
        $this->centro = (new Centro())->buscarPorId($registro->centro_id);
    }
}
