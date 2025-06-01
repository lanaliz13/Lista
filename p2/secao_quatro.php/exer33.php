<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Cálculo de Custo Total</title>
</head>
<body>
    <h1>Funções: Cálculo de Custo Total</h1>

    <section>
        <p>Calculando o custo total e aplicando desconto:</p>
        <ul>
            <?php
                function calcularTotal($valorUnitario, $qtdItens) {
                    return $valorUnitario * $qtdItens;
                }

               
                $valor = 95.00;
                $qtdeComprada = 4;

                $total= calcularTotal($valor, $qtdeComprada);

                $valorDesconto = $total * 0.15;
                $valorF = $total - $valorDesconto;

                echo "<li>Valor unitário: R$ $valor</li>";
                echo "<li>Quantidade: $qtdeComprada</li>";
                echo "<li>Total da compra: R$ $total</li>";
                echo "<li>Desconto de 15%: R$ $valorDesconto</li>";
                echo "<li>Valor final com desconto: R$ $valorF</li>";
            ?>
        </ul>
    </section>
</body>
</html>
