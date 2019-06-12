<?php 
    // Crear la Clase Auto
    class Auto{
        //Atributo
        // Marca es de tipo Protegido
        protected $marca = 'Audi';
        // Placa es de tipo Privada
        private $placa = 'TXD-123';
        // El resto de tipo Pública
        public $serie_motor;
        public $motor_fueza;

        // Metodos GET y SET
        // GET : obtener el valor de un atributo
        // SET : cambiar el valor de un atributo
        public function getMarca(){
            return $this->marca;
        }

        public function setMarca($valor){
            $this->marca = $valor;
        }

        public function getPlaca(){
            return $this->placa;
        }

        public function setPlaca($valor){
            $this->placa = $valor;
        }
    }
    // Crear el Objeto de tipo Auto
    $auto = new Auto();
    echo 'Auto Marca '.$auto->getMarca();
    $auto->setMarca('Toyota');
    echo '<br>';
    echo 'Auto Marca '.$auto->getMarca();
    echo '<hr>';
    // Modificando Placa
    echo 'Auto de Placa : '.$auto->getPlaca();
    $auto->setPlaca('XDD-234');
    echo '<br>Auto de Placa : '.$auto->getPlaca();
