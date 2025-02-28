<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="">DIGITE A VELOCIDADE DE UM CARRO EM METROS POR SEGUNDO</label>
        <input type="number" name="vel_carro">
        <button>Ok</button>
    </form>

    <?php
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        function velocidade_km() {
            return 3.6;
        }

        $vel_ms = $_POST['vel_carro'];
        $converter = velocidade_km() * $vel_ms;
        echo "o carro tem $vel_ms por m/s , em k/m é $converter";

    }
    
    ?>
</body>
</html>