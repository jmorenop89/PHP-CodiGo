<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuenta</title>
</head>
<body>
    <h1>Agregar Cuenta</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nro Cuenta :</td>
                <td><input type="text" name="nro_cuenta" id=""></td>
            </tr>
            <tr>
                <td>Monto :</td>
                <td><input type="text" name="monto" id=""></td>
            </tr>
            <tr>
                <td>Tipo :</td>
                <td>
                    <select name="tipo" id="">
                        <option value="debito">Debito</option>
                        <option value="credito">Crédito</option>
                    </select>
                </td>
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