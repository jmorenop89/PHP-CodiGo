<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cliente</title>
</head>
<body>
    <h1>Agregar Cliente</h1>
    <form action="fadd.php?bank=<?php echo $_GET['bank']?>" method="post">
        <table>
            <tr>
                <td>Nombre :</td>
                <td><input type="text" name="nombre" id=""></td>
            </tr>
            <tr>
                <td>Apellidos :</td>
                <td><input type="text" name="apellido" id=""></td>
            </tr>
            <tr>
                <td>Edad :</td>
                <td><input type="text" name="edad" id=""></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Agregar">
                </td>
            </tr>
            
        </table>
    </form>

</body>
</html>