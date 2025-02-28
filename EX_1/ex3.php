<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15% do valor</title>
</head>
<body>

<form method="POST" action="">
    <label for="valor">Digite o valor desejado: </label>
    <input type="number" name="valor" required>
    <button type="submit">OK</button>

</form>

<style>
    body {
        background-color: cadetblue;
    }
</style>

<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valor = $_POST['valor'];
    $resultado_15_valor = ($valor * 15)/100;

    echo "15% de $valor é : $resultado_15_valor";
}

?>
    
</body>
</html>