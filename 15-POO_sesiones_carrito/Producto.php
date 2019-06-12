<?php 
    // creo una clase Producto
    class Producto{
        // Atributos
        public $nombre;
        public $precio;
        public $cantidad;

        //Metodo : El contructor de la clase
        public function __construct($nombre,$precio,$cantidad){
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->cantidad = $cantidad;
        }

        // crear un metodo que devueva el subtotal
        // $precio * $cantidad
        public function subtotal(){
            return $this->precio * $this->cantidad;
        }

    }