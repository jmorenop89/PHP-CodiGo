<?php 
    //Terminar la session
    session_start();
    session_regenerate_id();
    // limpiar los datos asociados a la sesion
    // poner la matriz $_SESSION vacia
    session_unset();
    // Destruye la sesion
    session_destroy();
    header('location:index.php');