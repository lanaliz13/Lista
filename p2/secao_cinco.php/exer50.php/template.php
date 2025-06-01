<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title><?= htmlspecialchars($titulo) ?></title>
</head>
<body>
    <header>
        <h1><?= htmlspecialchars($titulo) ?></h1>
    </header>

    <main>
        <?= $conteudo ?>
    </main>

    <footer>
        <p>Meu site &copy; 2025</p>
    </footer>
</body>
</html>
