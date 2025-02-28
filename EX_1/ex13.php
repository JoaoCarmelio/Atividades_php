<html>
    /**screva um algoritmo que leia 3 notas de um aluno e calcule a média final deste aluno, considerando que a média é ponderada, ou seja, o peso das notas são, 
    respectivamente, 2, 3 e 5. */

    <form action="" method='POST'>
     <input type="number" required name="nota1" placeholder="NOTA 1">
     <input type="number" required name="nota2" placeholder = 'NOTA 2'>
     <input type="number" required name="nota3" placeholder="NOTA 3">
     <button type="submit">OK</button>


    </form>

    <?php
     if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $peso1 = 2; $peso2 = 3; $peso3 = 5;
        //calculando notas e pesos
        $soma_notas_pesos = (($nota1*$peso1) + ($nota2*$peso2) + ($nota3+$peso3) );
        echo "soma das notas com pesos = $soma_notas_pesos <br>";
        $soma_pesos = ($peso1+$peso2+$peso3);
        echo "soma das notas $soma_pesos <br>";
        $media = $soma_notas_pesos / $soma_pesos;
        echo " a media ponderada do aluno é : $media <br>";

     }
    
    ?>
</html>