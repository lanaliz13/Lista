<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Formatação de Preços</title>
</head>
<body>
    <h1>Funções: Formatação de Preços</h1>

    <section>
        <p>Formatando valores monetários:</p>
        <ul>
            <?php
                function exibir_preco($montante) {
                    return "R$ " . number_format($montante, 2, ',', '.');
                }

             
                $lista = [89.9, 1500, 34999.75, 12.5, 720.35];

                foreach ($lista as $i => $valorAtual) {
                    echo "<li>Produto " . ($i+ 1) . ": <strong>" . exibir_preco($valorAtual) . "</strong></li>";
                }
            ?>
        </ul>
    </section>
</body>
</html>
