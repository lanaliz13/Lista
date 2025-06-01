<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 3: Estruturas de Repetição (for, while, do..while)</h1>

    <h2>1. Itens pares em lista:</h2>
    <section>
        <p>Lista de identificadores de produtos (somente pares):</p>
        <ul>
            <?php
                for ($i = 2; $i <= 20; $i += 2) {
                    echo "<li>ID Produto: <strong>$i</strong></li>";
                }
            ?>
        </ul>
    </section>
</body>
</html>

