<?php

namespace App\Views;

class CentrosColaboraCiudadanoVista extends Vista{
    private $ciudadano;

    function __construct($request,$ciudadano) {
        parent::__construct($request);
        $this->ciudadano = $ciudadano;
    }

    function actualizar() {
        return $this->mostrar();
    }

    function mostrar() {
        $usuario =$this->request->user();
        $vistaCentrosColaboraCiudadano = require 'templates/CentrosColaboraCiudadanoTemplate.php';
        return $vistaCentrosColaboraCiudadano;
    }

}
