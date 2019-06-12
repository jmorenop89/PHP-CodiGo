<?php
    
    class MMaritimo extends MTransporte{
        // Atributos
        public $timon;

        public function __construct($timon,$combustible,$pasajeros,$conductor){
            $this->timon = $timon;
            // parent accedemos a la clase Padre
            parent::__construct($combustible,$pasajeros,$conductor);
        }
        
        //metodos
        public function getTimon(){
            return $this->timon;
        }
        public function setTimon($timon){
            $this->timon = $timon;
        }

    }