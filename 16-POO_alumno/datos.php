<?php
    // session_start() : Sirve para iniciar la sesion
    session_start();
    session_regenerate_id();
    // usar el matriz global $_SESSION para almacenar los datos
    $_SESSION['usuario']['nombre'] = $_POST['nombre'];
    $_SESSION['usuario']['apellido'] = $_POST['apellido'];
    // en el indice 'productos' inicio un arreglo
    $_SESSION['alumnos'] = array();
    // header: nos localizamos en el archivo carrito.php
    header('location:listar.php');