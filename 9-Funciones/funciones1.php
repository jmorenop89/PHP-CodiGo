<?php
    
    // funcion de tipo void
    function fn_imprimir($msg){
        echo $msg.'<br>';
    }
    fn_imprimir("<h1>Hola Mundo</h1>");

    // funcion que retorna un valor
    function fn_sumar($x,$y){
        $sum = $x + $y;
        // return $x + $y;
        return $sum;
    }
    $suma = fn_sumar(10,50);
    fn_imprimir(fn_sumar(10,70));
    fn_imprimir($suma);