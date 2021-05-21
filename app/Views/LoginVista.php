<?php

namespace App\Views;

use App\Models\Usuario;

class LoginVista extends Vista{
    function __construct($request) {
        parent::__construct($request);
    }

    function mostrar() {
        $u =$this->request->user();
        if($u) {
            $usuario = new Usuario();
            $usuario->setId($u->id);
            $usuario->setUsername($u->username);
            $usuario->setEmail($u->email);
        } else $usuario = $u;
        $vistaLogin = require 'templates/LoginTemplate.php';
        return $vistaLogin;
    }

}
