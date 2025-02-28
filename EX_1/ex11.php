/**11 – Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 27%.
 */

<html>
    <form method="POST">
        <h2>valor do produto</h2>
        <input type="text" placeholder="digite o valor" required name="vproduto">
        <button type="submit">ENVIAR</button>
    </form>


    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $valor_produto_user = $_POST['vproduto'];
        $desconto = 27;
        $valor_desconto = $valor_produto_user * ($desconto/100);
        $valor_final_produto = $valor_produto_user - $valor_desconto;
        echo "O VALOR DO PRODUTO DE $valor_produto_user , COM O DESCONTO DE $desconto \n , VALOR FINAL FICA : $valor_final_produto <br>";
    }elseif($valor_produto_user === 0) {
        echo "invalido <br>";
    }
    
    ?>
</html>
