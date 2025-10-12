<?php 
echo "Nome do funcionário: ";
$nome = readline() . PHP_EOL;
echo "Salário: R$ ";
$vencimento = readline() . PHP_EOL;
$salario = number_format ($vencimento, 2,',', '.');
?>