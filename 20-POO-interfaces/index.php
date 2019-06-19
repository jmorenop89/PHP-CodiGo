<?php
    //crear una interface    
    interface FiguraGeometrica{
        public function calcularArea();
    }

    class Triangulo implements FiguraGeometrica{
        public $altura;
        public $base;

        public function __construct($altura,$base){
            $this->altura = $altura;
            $this->base = $base;
        }

        public function calcularArea(){
            return ($this->altura*$this->base)/2;
        }
    }

