<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 3: Estruturas de Repetição (for, while, do..while)</h1>

    <h2>Total de vendas:</h2>
            <?php
                $dia = 1;
                $qtde_vendas = 0;

                do {
                    $venda = rand(5000, 500000) / 100; 
                    echo "<li>Dia $dia: R$ " . number_format($venda, 2, ',', '.') . "</li>";
                    $qtde_vendas+= $venda;
                    $dia++;
                } while ($dia <= 100);

                echo "<h3>Total VendasR$ " . number_format($qtde_vendas, 2, ',', '.') . "</h3>";
            ?>
</body>
</html>
