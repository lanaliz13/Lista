<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tabuadas de 1 a 10</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #fff0f5; /* rosa claro */
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #d63384; /* rosa escuro */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        th, td {
            border: 1px solid #f5c2e7;
            padding: 8px;
        }

        th {
            background-color: #d63384;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #fce4ec; /* rosa bem claro */
        }

        tr:hover {
            background-color: #f8bbd0; /* rosa intermediário */
        }
    </style>
</head>
<body>
    <h1>Tabuadas de 1 a 10</h1>
    <table>
        <tr>
            <?php
                for ($j = 1; $j <= 10; $j++) {
                    echo "<th>$j</th>";
                }
            ?>
        </tr>
        <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 10; $j++) {
                    echo "<td>$j x $i = " . ($j * $i) . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
