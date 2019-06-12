<?php 
    // Crear la clase Persona
    class Persona{
        // Atributos
        protected $nombre;
        protected $apellidos;
        protected $edad;
        protected $sexo;

        // Constructor de una Clase
        // funcion que no cambia de nombre (predefinida)
        // La cual tendra valores por defecto
        public function __construct(){
            $this->nombre = 'Pepe Lucho';
            $this->apellidos = 'Moreno';
            $this->edad = 40;
            $this->sexo = 'M';
        }

        // Funcion para cambiar valores del Objeto
        public function Persona($nombre,$apellidos,$edad,$sexo){
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->edad = $edad;
            $this->sexo = $sexo;
        }

        public function mostrarDatos(){
            $cad = '';
            $cad .= '<h1>Información Persona</h1>';
            $cad .= 'Nombre : '.$this->nombre.'<br>';
            $cad .= 'Apellidos : '.$this->apellidos.'<br>';
            $cad .= 'Edad : '.$this->edad.'<br>';
            $cad .= 'Sexo : '.$this->sexo;
            return $cad;
        }

    }

    // crear el objeto Persona
    $per = new Persona();
    echo $per->mostrarDatos();
    echo '<hr>';
    $per1 = new Persona();
    $per1->Persona('Karla','Lopez',34,'M');
    echo $per1->mostrarDatos();