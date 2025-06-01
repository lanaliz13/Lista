<?php


include_once 'helpers.php';

$valores = [50, 70, 30, 40, 50];
$media = Media($valores);
echo "A média é: " . $media . "<br>";

$preco = 1234.56;
echo "Preço formatado: " . formatarPreco($preco);
?>