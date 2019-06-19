<?php
    //crear un trait
    trait Ordenador{
        
        public function Encendido(){
            print('Estoy encendido');
        }
        public function Apagar(){
            print('Estoy apagado');
        }
        public function getModelo(){
            return $this->modelo;
        }

        public function getSistema(){
            return $this->getSO();
        }
    }
     trait Ordenador1{
        public function getModelo1(){
            return $this->modelo.'LLLL';
        }
     }
    class PCLenovo{
        public $sistema_operativo = 'Windows';
        public $modelo = 'Z750';
        //voy hacer uso del trait
        use Ordenador;
        use Ordenador1;
        //funcion del mismo nombre que tiene el trait
        // sobre escribiendo
        /*public function getModelo(){
            return 'Fue pz';
        }*/
        public function getSO(){
            return $this->sistema_operativo;
        }
       
    }

    $pc = new PCLenovo();
    echo '<pre>';
    var_dump($pc);
    echo '</pre>';
    $pc->Encendido();
    echo '<br>';
    $pc->Apagar();
    echo '<br>';
    echo $pc->getModelo();
    echo '<br>';
    echo $pc->getModelo1();
    echo '<br>';
    echo $pc->getSistema();
