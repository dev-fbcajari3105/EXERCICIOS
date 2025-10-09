<?php 
echo "Informe o modelo do veículo aludago: ";
$carro = fgets(STDIN);
echo "Informe a quantidade de dias que o veículo ficou alugado: ";
$dias = fgets(STDIN);
echo "Informe o valor do dia alugado: R$ ";
$alugueld = fgets(STDIN);
echo "Informe a quilometragem percorrida pelo carro: ";
$km = fgets(STDIN);
echo "Informe o valor do quilômetro percorrido: R$ ";
$kmp = fgets(STDIN);
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