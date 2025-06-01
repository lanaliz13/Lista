<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 3: Estruturas de Repetição (for, while, do..while)</h1>

    <h2>3. Processamento Limitado:</h2>
    <section>
        <p>Processando lista de itens (limitado a 50 para evitar sobrecarga):</p>
        <ul>
            <?php
                for ($i = 1; $i <= 100; $i++) {
                    echo "<li>Item processado: <strong>$i</strong></li>";

                    if ($i == 50) {
                        echo "<li>Limite de itens atingido. Processamento interrompido.</li>";
                        break;
                    }
                }
            ?>
        </ul>
    </section>
</body>
</html>
