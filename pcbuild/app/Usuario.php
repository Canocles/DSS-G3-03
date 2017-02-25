<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    private $id;
    private $email;
    private $nombre;
    private $apellidos;
    private $telefono;
    private $fechaNac;
    private $pedidos;

    public function __construct ($id, $email, $nombre, $apellidos, $telefono, $fechaNac) {
        $this->id = $id;
        $this->email = $email;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->telefono = $telefono;
        $this->fechaNaz = $fechaNac;
        $pedidos = array();
    }

    public function getId() {
        return $id;
    }

    public function getEmail() {
        return $email;
    }

    public function getNombre() {
        return $nombre;
    }

    public function getApellidos() {
        return $apellidos;
    }

    public function getTelefono() {
        return $telefono;
    }

    public function getFechaNac() {
        return $fechaNac;
    }

    public function getPedidos() {
        return $pedidos;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setFechaNac($fechaNac) {
        $this->fechaNac = $fechaNac;
    }

    public function setPedidos($pedidos) {
        $this->pedidos = $pedidos;
    }
}
