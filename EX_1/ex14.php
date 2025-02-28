<html>
    /**Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, divida em 10 parcelas e mostre para o usuário o valor da 
    parcela e o valor total da compra. */
    <?php
     $acrescimo = 0.16;
     $parcela = 10;
    ?>
    <form action="" method="POST">
         <label for="produto">VALOR DO PRODUTO : </label>
        <input type="number" required name="produto" >
        <input type="number" required name="acrecsimo" value="<? echo $acrescimo ?>">
        <input type="number" required name="parcela" value="<? echo $parcela; ?>"><br>
        <button type="submit">OK</button>
    </form>

    <?php
     if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $valor_produto = $_POST['produto'];
        $acrescimo = 0.16;
        $parcela = 10;
        $valor_com_acresimo = $valor_produto + ($valor_produto*$acrescimo);
        $valor_parcela = $valor_com_acresimo / $parcela;
        echo "valores da parcelas : $valor_parcela , valor final : $valor_com_acresimo <br>";
     }
    
    ?>
</html>