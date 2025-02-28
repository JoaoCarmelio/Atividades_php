<html>
    /**Escreva um algoritmo em PHP que receba duas notas, calcule a média e 
    exiba para o usuário a média se ela for maior que 7; caso contrário, exiba “Aluno reprovado */

    <form action="" method="POST">
        <input type="number" required placeholder="nota 1" name="nota1">
        <input type="number" required placeholder="nota 2" name="nota2">
        <button type="submit">OK</button>
    </form>



    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
     $nota1 = $_POST['nota1'];
     $nota2 = $_POST['nota2'];
     $media = ($nota1 + $nota2) / 2;


     if($media >= 7 ) {
        echo "a media do aluno é : $media , APROVADO! <br>";
    }elseif($media < 7) {
        echo "a media do aluno é : $media , REPROVADO! <br>";
    }else{
        echo "nenhuma nota avaliada <br>";
    }

    }
    
    
    ?>

</html>