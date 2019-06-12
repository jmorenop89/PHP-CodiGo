<?php
    require('MTransporte.php');
    require('MTerrestre.php');
    require('funciones.php');

    // creando un objeto de tipo MTransporte
    $trans = new MTransporte('GLP',30,'Pepe Lucho');
    $trans1 = new MTransporte('Gasolina',15,'Jose Perez');
    do_var_dump($trans);
    //do_var_dump($trans1);
    // editando el valor del atributo combustible
    $trans->setCombustible('Petroleo');
    //do_var_dump($trans);

    // crea un objeto de tipo MTerrestre
    $terrestre = new MTerrestre(4,'XD-123','GLP',30,'Jesus Moreno');
    do_var_dump($terrestre);
    $terrestre->setCombustible('GNV');
    do_var_dump($terrestre);