<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibe e calcula o preço de venda do produto</title>
    <style>
        body {
            background: radial-gradient(circle, rgba(255,255,255,0) 0%, rgba(255,0,0,0.5) 100%);
            background-color: black;
            color: red;
            text-align: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 600px;
            padding: 20px;
            background-color: black;
            border: 1px solid red;
            border-radius: 10px;
        }
        hr {
            border: 1px solid red;
        }
        marquee {
            color: gray;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        echo "<h3>EXIBE E CALCULA O PREÇO DE VENDA DO PRODUTO</h3>";
        echo "<hr>";
        // Recupera os dados informados nas caixas de texto e armazena nas variáveis
        $codigo = $_POST["codigo"];
        $descrição = $_POST["descricao"];
        $marca = $_POST["marca"];
        $PrecoCusto = $_POST["precocusto"];
        $PercAumento = $_POST["percentualaumento"];

        echo "Código: " . $codigo;
        echo "<br> Descrição: " . $descrição;
        echo "<br> Marca: " . $marca;
        echo "<br> Preço De Custo: " . $PrecoCusto;
        echo "<br> % De Aumento: " . $PercAumento . "%";
        echo "<hr>";
        echo "<marquee behavior='alternate'>Desenvolvido Por Olavo Soares &copy; 2024</marquee>";
        ?>
    </div>
</body>
</html>