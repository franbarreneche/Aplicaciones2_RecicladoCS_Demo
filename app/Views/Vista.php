<?php

namespace App\Views;

use App\Models\Rol;
use App\Models\Usuario;

abstract class Vista {
    protected $request;


    function __construct($request) {
        $this->request = $request;
    }

    abstract function mostrar();

    function getUsuario() {
        $u =$this->request->user();
        if(!$u) return null;
        $usuario = new Usuario();
        $usuario->setUsername($u->username);
        $usuario->setEmail($u->email);
        $usuario->setPassword($u->password);
        $usuario->setRol((new Rol())->buscarPorId($u->rol_id));
        return $usuario;
    }

    function session($key) {
        return $this->request->session()->get($key);
    }
}
