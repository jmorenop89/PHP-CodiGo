<?php

    class Cuenta{
        public $nro_cuenta;
        public $monto;
        public $tipo;

        public function __construct($nro_cuenta,$monto,$tipo){
            $this->nro_cuenta = $nro_cuenta;
            $this->monto = $monto;
            $this->tipo = $tipo;
        }

    }