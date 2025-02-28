

 <html>

 <form action="" method='POST'>
    <h2>digite a distancia total em km:</h2>
    <input type="number" required name="distancia">
    <br>

    <h2> digite a quantidade de combustivel em litro:</h2>
    <input type="number" required name="qtd_combus">

    <br>
    <button type="submit">OK</button>
 
 
 </form>
 
 
 
 <?php 
/**Escreva um algoritmo que receba de entrada a distância total (em km) percorrida por um automóvel e 
 * a quantidade de combustível (em litros) consumida para percorrê-la, 
 * calcule e imprima o consumo médio de combustível.  Fórmula: Consumo médio = Km / litros
 */

 if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $distancia_total = $_POST['distancia'];
    $qtd_combustivel = $_POST['qtd_combus'];
    $consumo_medio = $distancia_total / $qtd_combustivel;
    echo "o consumo medio é de : $consumo_medio <br>";
 }

 

 ?>
 
 
 </html>




