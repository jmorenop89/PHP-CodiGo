<?php 
    session_start();
    if(count($_SESSION) > 0){
        header('location:listar.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingresa</title>
</head>
<body>
    <form action="datos.php" method="post">
        Nombre <input type="text" name="nombre" id=""><br>
        Apellido <input type="text" name="apellido" id=""><br>
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>