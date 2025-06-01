<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 3: Estruturas de Repetição (for, while, do..while)</h1>

    <h2>2. Preparando para lançamento:</h2>
    <section>
        <p>Prepare-se para a contagem regressiva para o lançamento:</p>
        <ul>
            <?php
                for ($i = 5; $i >= 1; $i--) {
                    echo "<li>Faltam <strong>$i segundos</strong> para o lançamento...</li>";
                }
            ?>
        </ul>
        <h3>Lançamento concluído!</h3>
    </section>
</body>
</html>
