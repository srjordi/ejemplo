<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'calcular.php'?>
    <form action="index.php" method="POST">
        <label for="">datos de cuadrado</label>
        <br>
        <input type="text" name="LadoCuadrado">
        <button type="submit">enviar</button>

<br>
<br>
        <label for="">datos de rectagulo</label>
        <br>
        <label for="">base</label>
        <input type="text" name="base">
        <br>
        <label for="">altura</label>
        <input type="text" name="altura">
        <button type="submit">enviar</button>
        <br>
<br>
        <label for="">datos de triangulo</label>
        <br>
        <label for="">base</label>
        <input type="text" name="base1">
        <br>
        <label for="">altura</label>
        <input type="text" name="altura1">
        <button type="submit">enviar</button>
    </form>

    



<?php
$l = $_POST['LadoCuadrado'];
$obj=new calcular();
$obj ->cuadradoA($l);

$base = $_POST['base'];
$altura = $_POST['altura'];
$obj=new calcular1();
$obj -> rectanguloA($base,$altura);


$base1 = $_POST['base1'];
$altura1 = $_POST['altura1'];
$obj=new calcular2();
$obj -> trianguloA($base1,$altura1);
?>


</body>
</html>