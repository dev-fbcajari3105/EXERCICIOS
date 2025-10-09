<?php 
echo "RELÓGIO DE PONTOS (DIAS TRABALHADOS)" . PHP_EOL;
echo "Informe o nome do funcionário: ";
$nome = fgets(STDIN);
echo "Informe o valor da hora trabalhada: R$ ";
$h_worked = fgets(STDIN);
echo "Informe a quantidade de dias que " . $nome . " trabalhou: ";
$dias = fgets(STDIN);
$QH = $dias * 8;
$calculo = $QH * $h_worked;
$salario = number_format($calculo, 2, ',');
echo "" . PHP_EOL;
echo "ANALISE" . PHP_EOL;
echo "NOME DO FUNCIONÁRIO: " . $nome . PHP_EOL;
echo "QUANTIDADE DE DIAS TRABALHADOS: " . $dias . PHP_EOL;
echo "QUANTIDADE DE HORAS TRABALHADAS: " . $QH . PHP_EOL;
echo "VALOR DO SALÁRIO: R$ " . $salario . PHP_EOL;

?>