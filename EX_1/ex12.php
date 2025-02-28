<html>
    /**Escreva um algoritmo que receba dois valores, calcule e apresente a área de um trapézio.
     */

     <form action="" method="POST">
        <h2>DIGITE 2 VALORES : </h2>
        <input type="number" required name="valor1" placeholder="valor 1">
        <input type="number" required name="valor2" placeholder="valor 2">
        <input type="number" required name="altura" placeholder="altura">
        <br>
        <button type="submit">OK</button>
     </form>

     <?php
      if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $altura = $_POST['altura'];
        $area_trapazio = (($valor1 + $valor2) * $altura) / 2;
        echo "resultado é : $area_trapazio <br> ";
      }
     
     ?>
</html>