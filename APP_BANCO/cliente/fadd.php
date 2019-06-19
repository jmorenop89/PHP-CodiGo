<?php
    require_once('../modelos/Banco.php');
    session_start();
    $bank = $_SESSION['bancos'][$_GET['bank']];
    $cliente = new Cliente($_POST['nombre'],$_POST['apellido'],$_POST['edad']);
    $bank->addCliente($cliente);
    $_SESSION['bancos'][$_GET['bank']] = $bank;
    header('location:index.php?bank='.$_GET['bank']);
