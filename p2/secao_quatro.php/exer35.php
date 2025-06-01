<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Validação de Código</title>
</head>
<body>
    <h1>Funções: Validação de Código</h1>

    <section>
        <p>Verificando se o código é par ou ímpar:</p>
        <ul>
            <?php
                function Par($codigo) {
                    return $codigo % 2 == 0;
                }

                
                $codigo_teste = 7890;

                if (Par($codigo_teste)) {
                    echo "<li>Código $codigo_teste é <strong>par</strong>.</li>";
                } else {
                    echo "<li>Código $codigo_teste é <strong>ímpar</strong>.</li>";
                }
            ?>
        </ul>
    </section>
</body>
</html>
