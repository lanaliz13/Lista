<?php

function Media(array $numeros): float {
    if (count($numeros) === 0) {
        return 0;
    }
    return array_sum($numeros) / count($numeros);
}


function Preco(float $valor): string {
    return 'R$ ' . number_format($valor, 2, ',', '.');
}
?>