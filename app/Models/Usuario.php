<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Usuario extends Modelo implements Authenticatable
{
    private $username;
    private $email;
    private $password;
    private $rol_id;

    protected $rememberTokenName = false;



    function __construct(){
        parent::__construct('usuarios');
    }

    function getUsername() {
        return $this->username;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getRol() {
        return (new Rol())->buscarPorId($this->rol_id);
    }

    function setUsername($nombre) {
        $this->username = $nombre;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setRol(Rol $rol) {
        $this->rol_id = $rol->getId();
    }

    //implementacion de metodos abstractos heredados de Modelo
    function getTodos() {
        return $this->conexion->table($this->tabla)->get();
    }

    function guardar() {
        $id = $this->conexion->table($this->tabla)->insertGetId([
            "username" => $this->username,
            "email" => $this->email,
            "password" => $this->password,
            "rol_id" => $this->rol_id
            ]);
        $this->id = $id;
    }

    function buscarPorId($id) {
        $usuario = $this->conexion->table($this->tabla)->where('id', $id)->first();
        if(!$usuario) throw new ModelNotFoundException('Usuario no existente');
        $this->llenar($usuario);
        return $this;
    }

    function actualizar($datos) {
        return '//TODO';
    }

    function eliminar($id) {
        return '//TODO';
    }

    function buscarPorEmail($email) {
        $usuario = $this->conexion->table($this->tabla)->where('email', $email)->first();
        if(!$usuario) throw new ModelNotFoundException('Usuario no existente');
        $this->llenar($usuario);
        return $this;
    }

    private function llenar($registro) {
        $this->setId($registro->id);
        $this->setUsername($registro->username);
        $this->setEmail($registro->email);
        $this->setPassword($registro->password);
        $this->rol_id = $registro->rol_id;
    }



    //implementacion interface autenticacion
    public function getAuthIdentifierName() {
        return 'id';
    }

    public function getAuthIdentifier() {
        return $this->getId();
    }

    public function getAuthPassword() {
        return $this->getPassword();
    }

    public function getRememberToken() {
        //TODO
    }

    public function setRememberToken($value) {
        //TODO
    }

    public function getRememberTokenName() {
        //TODO
    }

}

