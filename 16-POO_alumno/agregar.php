<?php
    // Primero van las clases o funciones requeridas
    require('Alumno.php');
    session_start();
    // recepcionamos los datos
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    // creando el objeto de tipo Alumno
    $alumno = new Alumno($nombre,$apellido,$edad,$nota1,$nota2);
    array_push($_SESSION['alumnos'],$alumno);
    header('location:listar.php');