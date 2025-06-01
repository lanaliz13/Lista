<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 1: Variáveis e Tipos de Dados</h1>

    <h2>6. Cálculo de orçamento:</h2>
    <header>
        <?php
            $custo_Material = 2000.00;
            $custo_Mao_De_Obra = 1000.00;

            $custo_Total = $custo_Material + $custo_Mao_De_Obra;

            echo "Custo de material: R$ $custo_Material <br>";
            echo "Custo de mão de obra: R$ $custo_Mao_De_Obra <br>";
            echo "Custo total do orçamento: R$ $custo_Total <br>";
        ?>
    </header>
</body>
</html>
