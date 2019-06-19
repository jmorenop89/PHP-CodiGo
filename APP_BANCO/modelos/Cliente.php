<?php
    require_once('Cuenta.php');
    class Cliente{
        public $nombre;
        public $apellido;
        public $edad;
        public $cuentas;

        public function __construct($nombre,$apellido,$edad){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->edad = $edad;
            $this->cuentas = array();
        }

        public function addCuenta(Cuenta $cuenta){
            $this->cuentas[] = $cuenta;
        }

        public function getCuentas(){
            return $this->cuentas;
        }
    }