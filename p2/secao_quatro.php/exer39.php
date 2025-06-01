<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Área de Terreno</title>
</head>
<body>
    <h1>Funções: Cálculo de Área de Terreno</h1>

    <section>
        <p>Calculando a área de terrenos retangulares:</p>
        <ul>
            <?php
                function area($base, $altura) {
                    return $base * $altura;
                }
               
                $terrenos = [
                    [12, 18],
                    [9.5, 22],
                    [7, 14.3],
                    [30, 33.5]
                ];

                foreach ($terrenos as $i => $terreno) {
                    $base = $terreno[0];
                    $altura = $terreno[1];
                    $area = area($base, $altura);
                    echo "<li>Terreno " . ($i + 1) . ": $base m x $altura m = <strong>$area m²</strong></li>";
                }
            ?>
        </ul>
    </section>
</body>
</html>
