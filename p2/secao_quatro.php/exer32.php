<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Calculadora Básica - Soma</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculo{
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 300px;
        }

        .calculo h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        form input[type="submit"] {
            width: 100%;
            background-color: #007BFF;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        .resultado {
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
            color: #007BFF;
        }
    </style>
</head>
<body>

<div class="calculo">
    <h1>Soma</h1>
    <form method="post">
        <input type="number" name="n1" placeholder="Digite um número" required>
        <input type="number" name="n2" placeholder="Digite um segundo número" required>
        <input type="submit" value="Somar">
    </form>

    <?php
        function somar($n1, $n2) {
            return $n1 + $n2;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n1 = $_POST["num1"];
            $n2 = $_POST["num2"];
            $resultado = somar($n1, $n2);
            echo "<div class='resultado'>Resultado: $n1 + $n2 = <strong>$resultado</strong></div>";
        }
    ?>
</div>

</body>
</html>
