<?php
    
    class MAereo extends MTransporte{
        // Atributos
        public $helices;

        public function __construct($helices,$combustible,$pasajeros,$conductor){
            $this->helices = $helices;
            // parent accedemos a la clase Padre
            parent::__construct($combustible,$pasajeros,$conductor);
        }
        
        //metodos
        public function getHelices(){
            return $this->helices;
        }
        public function setHelices($helices){
            $this->helices = $helices;
        }

    }