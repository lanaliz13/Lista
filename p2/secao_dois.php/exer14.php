<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 2: Estruturas Condicionais (if, else, switch)</h1>

    <h2>14. Agendamento semanal:</h2>
    <header>
        <?php
            $dia = 5;

            switch ($dia) {
                case 1:
                    echo "Domingo";
                    break;
                case 2:
                    echo "Segunda-feira";
                    break;
                case 3:
                    echo "Terça-feira";
                    break;
                case 4:
                    echo "Quarta-feira";
                    break;
                case 5:
                    echo "Quinta-feira";
                    break;
                case 6:
                    echo "Sexta-feira";
                    break;
                case 7:
                    echo "Sábado";
                    break;
                default:
                    echo "Dia inválido";
            }
        ?>
    </header>
</body>
</html>