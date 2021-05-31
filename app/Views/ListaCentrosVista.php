<?php

namespace App\Views;

class ListaCentrosVista extends Vista{
    private $centros;

    function __construct($request,$centros) {
        parent::__construct($request);
        $this->centros = $centros;
    }

    function actualizar() {
        return $this->mostrar();
    }

    function mostrar() {
        $usuario = $this->getUsuario();
        $vistaListaCentro = require 'templates/CentroListTemplate.php';
        return $vistaListaCentro;
    }

}
