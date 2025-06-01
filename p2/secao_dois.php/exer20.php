<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>20. Verificação de acesso (Login):</h2>
    <header>
        <?php
            $usuario_ativado= true;         
            $administrador= false;             

            if ($usuario_ativado && $administrador) {
                echo "Acesso total concedido.";
            } else {
                echo "Acesso restrito.";
            }
        ?>
    </header>
</body>
</html>
