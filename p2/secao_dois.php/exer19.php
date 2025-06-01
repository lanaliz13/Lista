<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>19. Cálculo de salário:</h2>
    <header>
        <?php
            $cargo = "Desenvolvedor"; 

            switch ($cargo) {
                case "Desenvolvedor":
                    $salario = 5000;
                    break;
                case "Designer":
                    $salario = 3500;
                    break;
                case "Gerente":
                    $salario = 8000;
                    break;
                default:
                    $salario = 0;
            }

            if ($salario > 0) {
                echo "Cargo: $cargo<br>Salário base: R$ " . number_format($salario, 3, ',', '.');
            } else {
                echo "Cargo inválido.";
            }
        ?>
    </header>
</body>
</html>
