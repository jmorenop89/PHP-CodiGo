<?php 
    require_once('../modelos/Banco.php');
    session_start();
    $bank = $_SESSION['bancos'][$_GET['bank']];
    $clientes = $bank->getClientes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Clientes</title>
</head>
<body>
    
    <h1><?php echo $bank->nombre ?> : Lista de Clientes</h1>
    <a href="add.php?bank=<?php echo $_GET['bank'] ?>">Agregar Cliente</a> |
    <a href="../banco">Listar Bancos</a>
    <br><br>
    <table border="1" width="600">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Cuentas</th>
        </tr>
        <?php if(count($clientes) > 0){ ?>
        <?php foreach($clientes as $cliente){ ?>
        <tr>
            <td><?php echo $cliente->nombre ?></td>
            <td><?php echo $cliente->apellido ?></td>
            <td><?php echo $cliente->edad ?></td>
            <td><a href="../cuenta">Agregar</a></td>
        </tr>
        <?php }?>
        <?php }else{?>
        <tr>
            <td colspan="4" align="center">No hay registros</td>
        </tr>
        <?php }?>
        
    </table>

</body>
</html>