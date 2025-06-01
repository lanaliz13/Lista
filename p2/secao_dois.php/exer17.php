<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>17. Alerta climático:</h2>
    <header>
        <?php
            $temperatura = 30;

            if ($temperatura < 0) {
                echo "Alerta de Gelo!";
            } elseif ($temperatura >= 0 && $temperatura < 15) {
                echo "Clima Ameno";
            } elseif ($temperatura >= 15 && $temperatura <= 25) {
                echo "Clima Agradável";
            } else {
                echo "Atenção: Calor Extremo!";
            }
        ?>
    </header>
</body>
</html>
