<?php
    //Definiendo una clase abstracta
    // No se puede instanciar las clases abstractas, pero si las subclases
    abstract class FiguraGeometrica{
        //Aqui solo DECLARAMOS la función abstracta
        public abstract function calcularArea();
    }

    class Triangulo extends FiguraGeometrica{
        public $base;
        public $altura;
        
        public function __construct($base,$altura){
            $this->base = $base;
            $this->altura = $altura;
        }

        // Aqui implementamos el metodo Abstracto
        public function calcularArea(){
            return ($this->base * $this->altura)/2;
        }

    }
    
    $triangulo = new Triangulo(12,45);
    echo '<pre>';
    var_dump($triangulo);
    echo '</pre>';
    echo '<br>';
    echo $triangulo->calcularArea();
