<?php
    require_once('../modelos/Banco.php');
    session_start();
    $bancos = $_SESSION['bancos'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Bancos</title>
</head>
<body>
    
    <h1>Lista de Bancos</h1>
    <a href="add.php">Agregar Banco</a><br><br>
    <table border="1" width="600">
        <tr>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Clientes</th>
        </tr>
        <?php if(count($bancos) > 0){ ?>
        <?php foreach($bancos as $index => $banco){ ?>
        <tr>
            <td><?php echo $banco->nombre ?></td>
            <td><?php echo $banco->direccion ?></td>
            <td><a href="../cliente/index.php?bank=<?php echo $index ?>">Agregar</a></td>
        </tr>
        <?php }?>
        <?php }else{?>
        <tr>
            <td colspan="3" align="center">No hay registros</td>
        </tr>
        <?php }?>
    </table>

</body>
</html>