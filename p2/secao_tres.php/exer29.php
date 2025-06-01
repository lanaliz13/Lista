<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 3: Estruturas de Repetição (for, while, do..while)</h1>

    <h2>Ciclo de produção:</h2>
    <section>
        <p>Simulando o ciclo de produção até atingir 5 unidades:</p>
        <ul>
            <?php
                $producao = [1, 1, 0, 2, 1, 3]; // valores simulados de produção por ciclo
                $qtde = 0;
                $i = 0;

                do {
                    $prod = $producao[$i];
                    $qtde += $prod;
                    echo "<li>Ciclo " . ($i + 1) . ": Foram produzidas $prod unidade(s). Quantidade acumulada: $qtde</li>";
                    $i++;
                } while ($qtde< 5);
            ?>
        </ul>
        <h3>Produção finalizada com $quantidade unidade(s) produzidas.</h3>
    </section>
</body>
</html>
