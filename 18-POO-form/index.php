<?php
    require_once('Form.php');
    require_once('Html.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php Html::Style('style.css')?>
</head>
<body>
    <?php 
        $pais = array("Argentina","Perú","Chile",
        "Colombia","Bolivia","Qatar","Ecuador","Japón");
    ?>
    <h1>Formulario</h1>
    <?php Form::Open(); ?>
    <label for="">Nombre</label>
    <?php Form::Text('nombre') ?><br>
    <label for="">Apellidos</label>
    <?php Form::Text('apellidos') ?><br>
    <label for="">Pais</label>
    <?php Form::Select('pais',$pais) ?>
    <?php Form::Close(); ?>
</body>
</html>