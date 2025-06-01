<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>12. Classificação de temperatura:</h2>
    <header>
        <?php
            $temperatura = -7;
        

            if ($temperatura > 0) {
                echo "Temperatura Positiva";
            } elseif ($temperatura < 0) {
                echo "Temperatura Negativa";
            } else {
                echo "Temperatura Zero";
            }
        ?>
    </header>
</body>
</html>
