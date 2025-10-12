<?php 
echo "Informe o modelo do veículo aludago: ";
$carro = readline();
echo "Informe a quantidade de dias que o veículo ficou alugado: ";
$dias = readline();
echo "Informe o valor do dia alugado: R$ ";
$alugueld = readline();
echo "Informe a quilometragem percorrida pelo carro: ";
$km = readline();
echo "Informe o valor do quilômetro percorrido: R$ ";
$kmp = readline();
echo "" . PHP_EOL;
echo "ANÁLISE: " . PHP_EOL;
echo "MODELO: " . $carro . PHP_EOL;
echo "DIAS ALUGADOS: " . $dias . " dias." . PHP_EOL;
$Ad = $dias * $alugueld;
echo "VALOR POR DIAS ALUGADOS: R$ " . $Ad . " reais." . PHP_EOL;
echo "QUILÔMETROS RODADOS: " . $km . " quiômetros." . PHP_EOL;
$Akm = $kmp * $km;
echo "VALOR POR QUILÔMETROS PERCORRIDOS: R$ " . $Akm . " reais." . PHP_EOL;
$T = $Ad + $Akm;
echo "TOTAL A PAGAR: R$ " . $T . " reais" . PHP_EOL;
?>