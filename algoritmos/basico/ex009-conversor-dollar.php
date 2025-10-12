<?php 
echo "Qual é o valor que você possui na carteira? R$ ";
$real = readline() . PHP_EOL;
$conv = $real / 5.34;
$dollar = number_format($conv, 2, ',');
echo "Seus R$ ". $real . " reais podem comprar US$ " . $dollar . " dólares.";
?>