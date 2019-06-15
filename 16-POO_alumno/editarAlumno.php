<?php
    require('Alumno.php');
    session_start();
    $index = $_GET['index'];
    $alumno = $_SESSION['alumnos'][$index];
    //var_dump($alumno);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumno</title>
</head>
<body>
    <form action="editar.php?index=<?php echo $index ?>" method="post">
        Nombre : <input type="text" name="nombre" id="" value="<?php echo $alumno->nombre?>"><br>
        Apellidos : <input type="text" name="apellidos" id="" value="<?php echo $alumno->apellidos?>"><br>
        Edad : <input type="text" name="edad" id="" value="<?php echo $alumno->edad ?>"><br>
        Nota 1 : <input type="text" name="nota1" id="" value="<?php echo $alumno->nota1 ?>"><br>
        Nota 2 : <input type="text" name="nota2" id="" value="<?php echo $alumno->nota2 ?>" ><br>
        <input type="submit" value="Editar">
    </form>

    <a href="listar.php">Listar Alumnos</a>
</body>
</html>