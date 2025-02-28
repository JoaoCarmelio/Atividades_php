<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="POST" action="">
    <h2>COLOQUE O VALOR DO PRODUTO : </h2>
    <input type="number" name="valor_produto" step="0.1" required>
    <button>ok</button>
   </form>  

   <?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valor_number = $_POST['valor_produto'];
    $valor_desconto = 9;
    $desconto_produto = $valor_number * ($valor_desconto/100);
    $valor_final = $valor_number - $desconto_produto;

    echo "o produto com o valor $valor_number , com o desconto de $valor_desconto% , fica $$valor_final";
   }
   
   ?>
</body>
</html>