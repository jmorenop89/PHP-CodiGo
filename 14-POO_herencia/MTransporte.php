<?php
    // definiendo la clase MTransporte
    class MTransporte{
        // atributos
        public $combustible;
        public $pasajeros;
        public $conductor;

        // constructor : valores por defecto
        /*public function __construct(){
            // Aqui estamos definiendo atributos con valores por defecto.
            $this->combustible = 'GLP';
            $this->pasajeros = 30;
            $this->conductor = 'Pepe Lucho';
        }*/

        // Constructor : con parametros
        public function __construct($combustible,$pasajeros,$conductor){
            $this->combustible = $combustible;
            $this->pasajeros = $pasajeros;
            $this->conductor = $conductor;
        }

        //Metodos
        public function getCombustible(){
            return $this->combustible;
        }

        public function setCombustible($combustible){
            $this->combustible = $combustible;
        }

        public function getPasajeros(){
            return $this->pasajeros;
        }

        public function setPasajeros($pasajeros){
            $this->pasajeros = $pasajeros;
        }

        public function getConductor(){
            return $this->conductor;
        }

        public function setConductor($conductor){
            $this->conductor = $conductor;
        }

    }