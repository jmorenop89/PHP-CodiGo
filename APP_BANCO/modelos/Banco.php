<?php
    require_once('Cliente.php');
    class Banco{
        //Atributos
        public $nombre;
        public $direccion;
        public $clientes;

        //constructor
        public function __construct($nombre,$direccion){
            $this->nombre = $nombre;
            $this->direccion = $direccion;
            //inicio clientes en modo arreglo
            $this->clientes = array();
        }

        public function addCliente(Cliente $cliente){
            $this->clientes[] = $cliente;
        }

        public function getClientes(){
            return $this->clientes;
        }
    }