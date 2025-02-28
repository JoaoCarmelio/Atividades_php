<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="">

 <label for="valor">Digite o valor</label>
 <input type="number" name="valor" required>
 <br>
 <button type="submit">OK</button>

</form>

<Style>
    body {
        background-color: cadetblue;
        text-align: center;
        justify-content: center;
    }

    form input button {
        display: flex;
        text-align: center;
        justify-content: center;
        margin-top: 200px;
        
    }

</Style>

<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
$valor = $_POST['valor'];
$porcentagem5 = ($valor * 5) / 100;
$porcentagem50 = ($valor * 50) / 100;
echo "o valor é $valor <br> 5% = $porcentagem5. <br> 50% = $porcentagem50";

} 



?>
    
</body>
</html>