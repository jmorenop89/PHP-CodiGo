<?php
    require('Alumno.php');
    // para ser uso de la sesion siempre se debe iniciar con: session_start()
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Alumnos</title>
</head>
<body>
    <h1>Listar Alumnos</h1>
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
        <tr>
            <td colspan="2">
                <a href="cerrarSesion.php">Cerrar Sesión</a>
            </td>
        </tr>
    </table>
    <hr>
    <h2>Alumnos</h2>
    <a href="agregarAlumno.php">Agregar Alumno</a><br>
    <br>
    <table border="1" width="500">
        <tr>
            <th>Nro</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Promedio</th>
            <th>Editar</th>
        </tr>
        <?php $total = 0; ?>
        <?php foreach($_SESSION['alumnos'] as $index => $alum){?>
        <tr>
            <td><?php echo $index + 1   ?></td>
            <td><?php echo $alum->nombre ?></td>
            <td><?php echo $alum->apellidos ?></td>
            <td><?php echo $alum->edad ?></td>
            <td><?php echo $alum->nota1?></td>
            <td><?php echo $alum->nota2?></td>
            <td><?php echo $alum->promedio()?></td>
            <td>
                <a href="editarAlumno.php?index=<?php echo $index ?>">Editar</a>
            </td>
        </tr>
        <?php }?>
    </table>

</body>
</html>