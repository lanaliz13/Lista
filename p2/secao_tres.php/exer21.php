<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Secao 3: Estruturas de Repeticao (for, while, do..while)</h1>

    <h2>12. Contagem Regressiva (Estilizada):</h2>
    <main>
        <?php
            echo "<p>Iniciando sequência de lançamento...</p>";
            echo "<ul>";

            for ($i = 1; $i <= 10; $i++) {
                echo "<li><strong>T - $i segundos...</strong></li>";
            }

            echo "</ul>";
            echo "<h3>Lançamento concluído!</h3>";
        ?>
    </main>
</body>
</html>