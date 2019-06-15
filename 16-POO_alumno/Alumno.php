<?php
    class Alumno{
        // Atributos
        public $nombre;
        public $apellidos;
        public $edad;
        public $nota1;
        public $nota2;

        //metodos
        public function __construct($nombre,$apellidos,$edad,$nota1,$nota2){
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->edad = $edad;
            $this->nota1 = $nota1;
            $this->nota2 = $nota2;
        }

        public function promedio(){
            $prom = ($this->nota1 + $this->nota2)/2;
            return $prom;
        }
    }

    /* $alum = new Alumno('Jesus','Moreno',29,15,18);
    echo '<pre>';
    var_dump($alum);
    echo '</pre>';
    echo '<br>';
    echo $alum->promedio(); */