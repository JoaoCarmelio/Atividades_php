<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculo de media</title>
</head>
<body>
   <form method="POST" action="">

    <h1>coloque os numeros: </h1>
    <label for="numero1">Digite o numero 1 : </label>
    <input type="number" name="numero1" required>
    <br><br>
    <label for="numero2">Digite o numero 2 : </label>
    <input type="number" name="numero2" required>
    <br><br>
    <label for="numero3">Digite o numero 3 : </label>
    <input type="number" name="numero3" required>
    <br><br>
    <button type="submit" name="submit">OK</button>
   
</form>

<style>
    body {
        background-color: cadetblue;
    }
</style>

<?php
/*
 Escreva um algoritmo que leia três números nas variáveis Val1, 
 Val2 e Val3, calcule sua média na variável 
 media e exiba para o usuário o resultado
*/
//testando e cpturando valores
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $val1 = $_POST['numero1'];
    $val2 = $_POST['numero2'];
    $val3 = $_POST['numero3'];
    $resultado_media_variaveis = ($val1 + $val2 + $val3);
    echo "RESULATADO DA MEDIA DOS NUMEROS É : $resultado_media_variaveis";
}
  
?>
    
</body>
</html>







