<?php
    // funcion con parametros por defecto
    // la variable $inc tendra un valor por defecto 
    function fn_incrementar($numero,$inc=2){
        // $numero = $numero + $inc;
        return $numero += $inc;
    }

    //$num = fn_incrementar(40);
    $num = fn_incrementar(40,20);
    //echo $num;

    // funciones : parametros por valor
    function fn_cambia($x){
        echo $x.'<br>';
        $x = 100;
        echo $x.'<br>';
    }
    $A = 400;
    echo '<h2>Parametro por valor</h2>';
    echo $A.'<br>';
    fn_cambia($A);
    echo $A.'<br>';

    // funciones : parametros por referencia
    function fn_cambiaR(&$x){
        $x = 100;
    }
    echo '<h2>Parametro por referencia</h2>';
    $A = 400;
    echo $A.'<br>';
    fn_cambiaR($A);
    echo $A.'<br>';
