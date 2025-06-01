<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 3: Estruturas de Repetição (for, while, do..while)</h1>

    <h2>Entrada de dados repetitiva:</h2>
    <section>
        <p>Simulação de entradas:</p>
        <ul>
            <?php
                $lista = [8, 5, 6, 4, 3, 0, 1]; 
                $i = 0;

                do {
                    $numero = $lista[$i];
                    echo "<li>Valor digitado: $numero</li>";
                    $i++;
                } while ($numero != 0);
            ?>
        </ul>
        <h3>Encerrando com valor 0</h3>
    </section>
</body>
</html>
