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
        /**dd($u);
        if($u) {
            $usuario = new Usuario();
            $usuario->setId($u->id);
            $usuario->setUsername($u->username);
            $usuario->setEmail($u->email);
            $usuario->setRol((new Rol())->buscarPorId($u->rol_id));
        } else $usuario = $u;*/
        $vistaDashboard = require 'templates/DashboardTemplate.php';
        return $vistaDashboard;
    }

}
