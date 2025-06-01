<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 3: Estruturas de Repetição (for, while, do..while)</h1>

    <h2>Listagem de participantes:</h2>
    <section>
        <p>Lista de pessoas:</p>
        <ul>
            <?php
                $Pessoas= [
                    "Clara Torres",
                    "Laura Lima",
                    "Gabrielle Gomes",
                    "Henrique Rocha",
                    "Daniel Costa",
                    "Felipe Torres",
                    "Gabriela Souza",
                    "Henrique Alves",
                    "Isabela Martins",
                    "João Pedro"
                ];

                $i = 0;
                do {
                    echo "<li>{$Pessoas[$i]}</li>";
                    $i++;
                } while ($i < count($Pessoas));
            ?>
        </ul>
    </section>
</body>
</html>
