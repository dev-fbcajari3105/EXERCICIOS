<?php 
$numero = 6;
$PoI = $numero % 2;

echo "Informe um número para saber se é par ou ímpar: " . PHP_EOL;
echo $numero . PHP_EOL;
    if ($PoI == 0) {
        echo "Este número é par e sua divisão tem resto " . $PoI . "." . PHP_EOL;
    } else {
        echo "Este número é impar e sua divisão tem resto " . $PoI . "." . PHP_EOL;
    }
?>