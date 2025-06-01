<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>16. Cadastro de usuário - Estado civil:</h2>
    <header>
        <?php
            $estadoCivil = "D"; 

            switch ($estadoCivil) {
                case "C":
                    echo "Estado civil: Casado(a)";
                    break;
                case "S":
                    echo "Estado civil: Solteiro(a)";
                    break;
                case "D":
                    echo "Estado civil: Divorciado(a)";
                    break;
                case "O":
                    echo "Estado civil: Outro";
                    break;
                default:
                    echo "Código de estado civil inválido";
            }
        ?>
    </header>
</body>
</html>
