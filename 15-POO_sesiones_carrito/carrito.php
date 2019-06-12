<?php
    require('Producto.php');
    // para ser uso de la sesion siempre se debe iniciar con: session_start()
    session_start();
    //echo '<pre>';
    //var_dump($_SESSION);
    //echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito</title>
</head>
<body>
    <h1>Carrito de Compras</h1>
    <hr>
    <table width="100">
        <tr>
            <td>Nombre:</td> 
            <td><?php echo $_SESSION['usuario']['nombre'] ?></td>
        </tr>
        <tr>
            <td>Apellido: </td> 
            <td><?php echo $_SESSION['usuario']['apellido'] ?></td>
        </tr>
    </table>
    <hr>
    <h2>Productos</h2>
    <a href="agregarProducto.php">Agregar Producto</a><br>
    <br>
    <table border="1" width="200">
        <tr>
            <th>Nro</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
        </tr>
        <?php $total = 0; ?>
        <?php foreach($_SESSION['productos'] as $index => $producto){?>
        <tr>
            <td><?php echo $index ?></td>
            <td><?php echo $producto->nombre ?></td>
            <td><?php echo $producto->precio ?></td>
            <td><?php echo $producto->cantidad ?></td>
            <td><?php echo $producto->subtotal()?></td>
        </tr>
        <?php $total = $total + $producto->subtotal(); }?>
        <tr>
            <td colspan="4"></td>
            <td><?php echo $total ?></td>
        </tr>
    </table>

</body>
</html>