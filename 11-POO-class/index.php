<?php

    //Creando un clase Jugador
    class Jugador{
        //Atributos
        public $nombre = 'Messi';
        public $edad = 34;
        public $club = 'FC Barcelona';
        public $posicion = 'Delantero';
        public $rendimiento = 85;
        public $velocidad = 70;

        //metodos
        public function velMas(){
            $this->velocidad++;
        }

        public function velMenos(){
            $this->velocidad--;
        }

        public function aumentarRen(){
            $this->rendimiento++;
            $this->velMas();
        }

        public function disRen(){
            $this->rendimiento--;
            $this->velMenos();
        }
    }

    // Crear un objeto
    $player_1 = new Jugador();
    //var_dump($player_1);
    //echo '<h1>Información del Jugador</h1>';
    //echo 'Nombre : '.$player_1->nombre;
    //echo '<br>Edad : '.$player_1->edad;
    //echo '<br>club : '.$player_1->club;

    //Modificar algunos atributos
    $player_1->nombre = 'Samuel Etto';
    $player_1->edad = 27;
    $player_1->club = 'Real Madrid';
    echo '<h1>Información del Jugador</h1>';
    echo 'Nombre : '.$player_1->nombre;
    echo '<br>Edad : '.$player_1->edad;
    echo '<br>Club : '.$player_1->club;
    echo '<br>Redimiento : '.$player_1->rendimiento;
    echo '<br>Velocidad : '.$player_1->velocidad;
    echo '<hr>';
    // Ejecutando los metodos
    $player_1->aumentarRen();
    $player_1->aumentarRen();
    $player_1->aumentarRen();
    $player_1->disRen();
    $player_1->aumentarRen();
    echo '<br>Redimiento : '.$player_1->rendimiento;