<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>15. Escolha de bebida:</h2>
    <header>
        <?php
            $bebida = "Café";

            if ($bebida == "Café" || $bebida == "Chá" || $bebida == "Suco") {
                echo "Bedida escolhida: $bebida";
            } else {
                echo "Bebida indisponível";
            }
        ?>
    </header>
</body>
</html>
