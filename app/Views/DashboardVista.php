<?php

namespace App\Views;

use App\Models\Rol;
use App\Models\Usuario;

class DashboardVista extends Vista{
    function __construct($request) {
        parent::__construct($request);
    }

    function actualizar() {
        return $this->mostrar();
    }

    function mostrar() {
        $usuario =$this->request->user();
        $vistaDashboard = require 'templates/DashboardTemplate.php';
        return $vistaDashboard;
    }

}
