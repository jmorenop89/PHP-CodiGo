<?php

    //Creación de una clase Estática
    // Para que sea considerada una clase estatica
    // 1.- tanto atributos y metodos son de acceso público
    // 2.- y deben ser de tipo estatica (static)
    class Util{
        //Atributos
        public static $coleccion = array();

        //Metodos
        public static function Sum($x,$y){
            return $x + $y;
        }

        public static function do_var_dump($arg){
            echo '<pre>';
            var_dump($arg);
            echo '</pre>';
        }

        public static function Cdump(){
            Util::do_var_dump(Util::$coleccion);
        }
    }

    Util::Cdump();
    array_push(Util::$coleccion,12);
    Util::Cdump();
    array_push(Util::$coleccion,78);
    Util::Cdump();
    echo Util::$coleccion[0];
    