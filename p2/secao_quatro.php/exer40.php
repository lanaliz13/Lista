<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Log de Eventos</title>
</head>
<body>
    <h1>Funções: Log de Eventos com Timestamp</h1>

    <section>
        <p>Registrando ações com data e hora:</p>
        <ul>
            <?php
                function funcao($mensagem) {
                    $dataHora = date("d/m/Y H:i:s", time()); // Formata o timestamp atual
                    echo "<li>[$dataHora] Evento: <strong>$mensagem</strong></li>";
                }
            
                funcao("Login realizado");
                funcao("Produto adicionado ao carrinho");
                funcao("Pedido confirmado");
                funcao("Sessão encerrada");
            ?>
        </ul>
    </section>
</body>
</html>
