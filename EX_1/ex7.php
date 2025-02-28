<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULANDO SEU IMC</title>
</head>
<body>
    <form method="POST" action="">
        <h2>--- CALCULE SEU IMC ---</h2>
        <label for="peso">QUAL SEU PESO : </label><br>
        <input type="number" name="peso" step="0.1">
        <br>
        <label for="altura">QUAL SUA ALTURA : </label><br>
        <input type="number" name="altura" step="0.1">
        <br>
        <label for="nome">SEU NOME</label><br>
        <input type="text" name="nome">
        <button>Ok</button>

    </form>
   <?php
   
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $peso_user = $_POST['peso'];
    $altura_user = $_POST['altura'];
    $nome_user = $_POST['nome'];
    if($peso_user === 0 || $altura_user === 0) {
        echo "INFORMAÇÃO INVALIDADE , COLOQUE UM VALOR ADEQUADO!";
    }else {
        $imc_user = $peso_user/($altura_user*2) ;
        echo "O paciente $nome_user, com o peso ($peso_user) e altura ($altura_user) \n
        tem o IMC DE : $imc_user";
    }
   }
   
   ?>
    
</body>
</html>