<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>13. Sistema de avaliação:</h2>
    <header>
        <?php
            $Avaliacao_1 = 10.0; 
            $Avaliacao_2 = 8.0;  

            $media = ($Avaliacao_1 + $Avaliacao_2) / 2;

            echo "Média: $media <br>";

            if ($media >= 7) {
                echo "Aprovado";
            } elseif ($media >= 5 && $media < 7) {
                echo "Recuperação";
            } else {
                echo "Reprovado";
            }
        ?>
    </header>
</body>
</html>
