<?php
    // funcion
    function fn_listar(){
        $num = func_num_args();
        echo 'Nro de variables : '.$num.'<br>';
        // Lista es un arreglo
        $list = func_get_args();
        echo 'Lista '.$list.'<br>';
        foreach($list as $index => $value){
            echo '$lis['.$index.'] = '.$value.'<br>';
        }
    }
    
    fn_listar('Jorge','Alberto','JeanCarlo','Gustavo');
    