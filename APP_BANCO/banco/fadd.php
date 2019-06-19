<?php
    require('../modelos/Banco.php');
    session_start();
    $banco = new Banco($_POST['nombre'],$_POST['direccion']);
    $_SESSION['bancos'][] = $banco;
    header('location:index.php');