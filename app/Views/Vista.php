<?php

namespace App\Views;


abstract class Vista {
    protected $request;

    function __construct($request) {
        $this->request = $request;
    }

    abstract function mostrar();

    function session($key) {
        return $this->request->session()->get($key);
    }
}
