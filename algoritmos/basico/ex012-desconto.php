<?php 
echo "Digite o nome do produto: ";
$produto = readline();
echo "Digite o valor real do produto: ";
$valor = readline();
echo "Digite a porcentagem do desconto promocional: ";
$desc = readline();
$calc = $valor - ($valor * $desc / 100);
$promo = number_format($calc, 2, ',');
echo "O preço promocional do produto " . $produto . " é R$ ". $promo . " reais.";
?>