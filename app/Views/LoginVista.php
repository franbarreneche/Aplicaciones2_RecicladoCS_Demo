<?php

namespace App\Views;

use App\Models\Usuario;

class LoginVista extends Vista{
    function __construct($request) {
        parent::__construct($request);
    }

    function actualizar() {
        return $this->mostrar();
    }

    function mostrar() {
        $usuario = $this->getUsuario();
        $vistaLogin = require 'templates/LoginTemplate.php';
        return $vistaLogin;
    }

}
