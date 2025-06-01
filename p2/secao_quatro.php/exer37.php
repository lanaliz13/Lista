<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Saudação Personalizada</title>
</head>
<body>
    <h1>Funções: Saudação Personalizada</h1>

    <section>
        <p>Gerando mensagens para usuários:</p>
        <ul>
            <?php
                function saudacao($nome) {
                    return "Olá, $nome! Seja bem-vindo(a) ao nosso site.";
                }

            
                $usuarios = ["Felipe", "Mariana", "Patricia", "Franscisca"];

                foreach ($usuarios as $nomeUsuario) {
                    echo "<li>" . saudacao($nomeUsuario) . "</li>";
                }
            ?>
        </ul>
    </section>
</body>
</html>
