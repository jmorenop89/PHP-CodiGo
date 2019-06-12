<?php
    // crear una clase para los medios terrestres
    // Ahora con la palabra reservada "extens",
    // extender de la clase MTransporte
    class MTerrestre extends MTransporte{
        // Atributos
        public $nro_ruedas;
        public $nro_registro;

        public function __construct($nro_ruedas,$nro_registro,$combustible,$pasajeros,$conductor){
            $this->nro_ruedas = $nro_ruedas;
            $this->nro_registro = $nro_registro;
            // parent accedemos a la clase Padre
            parent::__construct($combustible,$pasajeros,$conductor);
        }
        
        //metodos
        public function getNroRuedas(){
            return $this->nro_ruedas;
        }
        public function setNroRuedas($nro_ruedas){
            $this->nro_ruedas = $nro_ruedas;
        }
        public function getNroRegistro(){
            return $this->nro_registro;
        }
        public function setNroRegistro($nro_registro){
            $this->nro_registro = $nro_registro;
        }

    }