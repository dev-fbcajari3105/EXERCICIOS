<?php 
$ano = 2002;

$BS1 = $ano % 4;
$BS2 = $ano % 400;

echo "Informe o ano que deseja analisar para saber se é bissexto ou não: ";
echo $ano . PHP_EOL;

if ($BS1 != 0 && $BS2 != 0) {
    echo "O ano " . $ano . " é um ano normal, com 365 dias." . PHP_EOL;
} else {
    echo "O ano " . $ano . " é um ano bissexto, com 366 dias." . PHP_EOL;
}
?>