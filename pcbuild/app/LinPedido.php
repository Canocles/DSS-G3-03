<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinPedido {
    private $num;
    private $cantidad;
    private $producto;

    private function __constructor ($num, $cantidad, $producto) {
        setNun ($num);
        setCantidad ($cantidad);
        setProducto ($producto);
    }

    public function getNum () {
        return $this->num;
    }

    public function getCantidad () {
        return $this->cantidad;
    }

    public function getProducto () {
        return $this->producto;
    }

    public function setNun ($num) {
        $this->num=$num;
    }

    public function setCantidad ($cantidad) {
        $this->cantidad=$cantidad;
    }

    public function setProducto ($producto) {
        $this->producto=$producto;
    }

    public function cambiarCantidad ($num, $cantidad) {
        setCantidad ($cantidad);
    }
}

