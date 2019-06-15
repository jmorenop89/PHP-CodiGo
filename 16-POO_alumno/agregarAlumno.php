<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumno</title>
</head>
<body>
    <form action="agregar.php" method="post">
        Nombre : <input type="text" name="nombre" id="" value=""><br>
        Apellidos : <input type="text" name="apellidos" id=""><br>
        Edad : <input type="text" name="edad" id=""><br>
        Nota 1 : <input type="text" name="nota1" id=""><br>
        Nota 2 : <input type="text" name="nota2" id=""><br>
        <input type="submit" value="Agregar">
    </form>

    <a href="listar.php">Listar Alumnos</a>
</body>
</html>