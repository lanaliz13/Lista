<?php
    $tituloPagina = "Página com Alerta";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title><?php echo $tituloPagina; ?></title>
</head>
<body>
    <h1><?php echo $tituloPagina; ?></h1>

    <?php include "alerta.php"; ?>

    <p>Conteúdo principal da página continua aqui...</p>
</body>
</html>