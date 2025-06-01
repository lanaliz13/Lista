<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 3: Estruturas de Repetição (for, while, do..while)</h1>

    <h2>25. Exceção em relatório:</h2>
    <section>
        <p>Exibindo os dados do simulado:</p>
        <ul>
            <?php
                $alunos = [
                    ["2025104", "Fernanda Torres", 8.5],
                    ["2025609", "Jorge Matheus", 7.0],
                    ["2025890", "Luis Felipe", 9.2],
                    ["2025004", "Ana Castro", 6.8],
                    ["2025009", "Leticia Alves", 7.5],
                    ["2025004", "Laura Lamouser", 8.9],
                    ["2025097", "Gabriel Baia", 9.7],
                    ["2025048", "Samilly Batista", 6.5],
                    ["2025079", "Erdnaxela Vieira", 7.8],
                    ["2025010", "Lucas Torres", 8.0]
                ];

                $i = 0;
                do {
                    echo "<li>Matrícula: {$alunos[$i][0]} - Nome: {$alunos[$i][1]} - Nota PWEB1: {$alunos[$i][2]}</li>";
                    $i++;
                } while ($i < count($alunos));
            ?>
        </ul>
    </section>
</body>
</html>
