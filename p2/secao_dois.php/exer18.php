<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>18. Preferência de cor:</h2>
    <header>
        <?php
            $cor = "Amarelo"; 
    

            if ($cor == "Vermelho" || $cor == "Azul" || $cor == "Verde") {
                echo "Você escolheu a cor: $cor";
            } else {
                echo "Cor indisponível. Que tal usar a cor padrão? Sugestão: Verde";
            }
        ?>
    </header>
</body>
</html>
