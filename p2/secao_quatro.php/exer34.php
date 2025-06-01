<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Média de Notas</title>
</head>
<body>
    <h1>Funções: Média de Notas</h1>

    <section>
        <p>Calculando a média final de um aluno:</p>
        <ul>
            <?php
                function calcularMedia($notas) {
                    $soma = 0;
                    $quantidade = count($notas);

                    foreach ($notas as $nota) {
                        $soma += $nota;
                    }

                    return $quantidade > 0 ? $soma / $quantidade : 0;
                }

            
                $notasAluno = [7.5, 8.0, 6.5, 9.0];

                $mediaFinal = calcularMedia($notasAluno);

              
                foreach ($notasAluno as $i => $nota) {
                    echo "<li>Nota " . ($i+ 1) . ": $nota</li>";
                }

                echo "<li><strong>Média final: $mediaFinal</strong></li>";
            ?>
        </ul>
    </section>
</body>
</html>
