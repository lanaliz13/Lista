<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Verificação de Elegibilidade</title>
</head>
<body>
    <h1>Funções: Verificando Elegibilidade</h1>

    <section>
        <p>Verifique se a pessoa é maior de idade:</p>
        <ul>
            <?php
                function verificacao($idade) {
                    if ($idade >= 18) {
                        return "Elegível";
                    } else {
                        return "Inelegível";
                    }
                }

                
                $idades = [18, 34, 20, 15, 17];

                foreach ($idades as $i => $idade_agora) {
                    $resultado = verificarElegibilidade($idade_agora);
                    echo "<li>Pessoa " . ($i + 1) . ": $idade_agora anos - $resultado</li>";
                }
            ?>
        </ul>
    </section>
</body>
</html>
