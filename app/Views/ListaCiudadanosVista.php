<?php

namespace App\Views;

class ListaCiudadanosVista extends Vista{
    private $ciudadanos;

    function __construct($request,$ciudadanos) {
        parent::__construct($request);
        $this->ciudadanos = $ciudadanos;
    }

    function actualizar() {
        return $this->mostrar();
    }

    function mostrar() {
        $usuario =$this->request->user();
        $vistaListaCiudadanos = require 'templates/CiudadanoListTemplate.php';
        return $vistaListaCiudadanos;
    }

}
