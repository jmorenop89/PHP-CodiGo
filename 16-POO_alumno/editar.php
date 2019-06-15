<?php 
    require('Alumno.php');
    session_start();
    $index = $_GET['index'];
    //capturo el objeto en la posicion ($index)
    $alumno = $_SESSION['alumnos'][$index];
    // con los valores enviados desde el formulario
    // pasar los valores al objeto
    $alumno->nombre = $_POST['nombre'];
    $alumno->apellidos = $_POST['apellidos'];
    $alumno->edad = $_POST['edad'];
    $alumno->nota1 = $_POST['nota1'];
    $alumno->nota2 = $_POST['nota2'];
    // se reasigna el el objeto cambiado en la posicion ($index)
    $_SESSION['alumnos'][$index] = $alumno;
    header('location:listar.php');