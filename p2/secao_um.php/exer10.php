<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática 2 - N1</title>
</head>
<body>
    <h1>Seção 1: Variáveis e Tipos de Dados</h1>

    <h2>10. Contagem de palavras de resumo:</h2>
    <header>
        <?php
            $resumo = "O Instituto Federal de Educação, Ciência e Tecnologia (IFCE) é uma instituição pública brasileira voltada para o ensino técnico e superior, 
            pesquisa e extensão. 
            Eles são conhecidos por integrar ensino médio técnico, cursos superiores, pós-graduação, pesquisa aplicada e extensão, 
            com foco no desenvolvimento regional e na inclusão social.";

            $totalCaracteres = strlen($resumo);

            echo "Resumo: <br>$resumo<br><br>";
            echo "Número de caracteres: $totalCaracteres";
        ?>
    </header>
</body>
</html>
