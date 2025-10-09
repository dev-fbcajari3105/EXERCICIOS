<?php 

echo "Informe o seu nome: ";
$nome = fgets(STDIN) . PHP_EOL;
echo "Informe quantos cigarros você fuma/fumava por dia: ";
$cigarros = fgets(STDIN) . PHP_EOL;
$TPD = $cigarros * 10;
echo "Você perdia " . $TPD . " minutos de vida por dia." . PHP_EOL;
echo "Informe quantos anos você fuma/fumou: ";
$anos = fgets(STDIN) . PHP_EOL;
$AF = $anos * 365;
$TTP = ($TPD * $AF) / 1440;
$perdido = number_format($TTP, 2, ',');
echo "Você perdeu " . $perdido . " dias por conta do cigarro.";

?>