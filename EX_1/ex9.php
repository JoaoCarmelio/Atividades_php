<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <h2>QUAL O VALOR DO PRODUTO : </h2>
        <input type="number" name="valor" required step="0.01">
        <button>OK</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] === 'POST') {
        $valor_produto = $_POST['valor'];
        $valor_porcentagem = 7;
        $valor_desconto =  $valor_produto*(7/100);
        $valor_com_desconto = $valor_produto - $valor_desconto;
        
        echo "preço origianal : $valor_produto <br>";
        echo "valor do desconto : $valor_desconto <br>";
        echo "valor com desconto : " . number_format($valor_com_desconto,2);
    }
    
    ?>


</body>
</html>