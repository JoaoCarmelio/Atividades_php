<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite o primeiro numero</label>
        <input type="number" name="numero1" required>

        <br>
        <label for="numero">Digite o segundo numero</label>
        <input type="number" name="numero2" required>
        <button type="submit">Ok</button>
    </form>


    <?php
    
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        $quadrado1 = pow($num1 ,2);
        echo "o quadrado do numero $num1 é : $quadrado1 <br>";
        $quadrado2 = pow($num2,2);
        echo "o quadrado do numero $num2 é : $quadrado2 <br>";
        $somaQuadrados = $quadrado1 + $quadrado2;
        echo "a soma do quadrado1 $quadrado1 e quadrado2 $quadrado2 é $somaQuadrados";
    }
    
    
    ?>
</body>
</html>