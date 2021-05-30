<?php

namespace App\Views;

class RecicladosEnCentroVista extends Vista{
    private $centro;

    function __construct($request,$centro) {
        parent::__construct($request);
        $this->centro = $centro;
    }

    function actualizar() {
        return $this->mostrar();
    }

    function mostrar() {
        $usuario =$this->request->user();
        $vistaRecicladosEnCentro = require 'templates/RecicladosEnCentroTemplate.php';
        return $vistaRecicladosEnCentro;
    }

}
