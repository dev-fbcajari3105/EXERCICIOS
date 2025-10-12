<?php 
echo "Identifique o funcionário: ";
$nome = readline();
echo "Informe o valor do salário do funcionário " . $nome . ", R$ ";
$salario = readline();
echo "Atualmente, o funcionário " . $nome . " recebe R$ " . $salario . " reais." . PHP_EOL;
echo "Informe a porcentagem de aumento do salário do funcionário " . $nome . ": ";
$porcentagem = readline();
$calculo = $salario + ($salario * $porcentagem / 100);
$aumento = number_format($calculo, 2, ',');
echo "O funcionário " . $nome . " receberá R$ " . $aumento . " reais.";
?>