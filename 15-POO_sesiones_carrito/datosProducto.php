<?php
    // Primero van las clases o funciones requeridas
    require('Producto.php');
    session_start();
    // recepcionamos los datos
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    // creando el objeto de tipo Producto
    $producto = new Producto($nombre,$precio,$cantidad);
    //var_dump($producto);
    //array_push() : agregamos los elementos al arreglo $_SESSION['productos']
    array_push($_SESSION['productos'],$producto);
    //echo '<pre>';
    //var_dump($_SESSION['productos']);
    //echo '</pre>';
    header('location:carrito.php');