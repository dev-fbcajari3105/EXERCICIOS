<?php 
echo "Nome do funcionário: ";
$nome = fgets(STDIN) . PHP_EOL;
echo "Salário: R$ ";
$vencimento = fgets(STDIN) . PHP_EOL;
$salario = number_format ($vencimento, 2,',', '.');
?>