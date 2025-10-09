
<?php 
$nome = "Fabinho";
$dia = 29;
$mes = "09";
$ano = 1992;
$dia_v = 27;
$mes_v = "09";
$ano_v = 2025;
$distancia = 16;

$valor1 = 0.50;
$valor2 = 0.45;
$t1 = $valor1 * $distancia;
$total1 = number_format($t1, 2, ',');
$t2 = $valor2 * $distancia;
$total2 = number_format($t2, 2, ',');

echo "****************************************************************" . PHP_EOL;
echo "*                          VIAGE JEREBA                        *" . PHP_EOL;
echo "*                SEU DESTINO É NOSSA PRIORIDADE!               *" . PHP_EOL;
echo "****************************************************************" . PHP_EOL;

echo "Informe o nome do passageiro: ";
echo $nome . PHP_EOL;
echo "Informe a data de nascimento do passageiro: ";
echo $dia . " / ";
echo $mes . " / ";
echo $ano . PHP_EOL;
echo "Informe a data da passagem: ";
echo $dia_v . " / ";
echo $mes_v . " / ";
echo $ano_v . PHP_EOL;

echo "Informe a distância a ser percorrida: ";
echo $distancia . PHP_EOL;

if ($distancia <= 200) {
    echo "O valor da passagem é de R$ " . $total1 . " reais." . PHP_EOL;
} else {
    echo "O valor da passagem é de R$ " . $total2 . " reais." . PHP_EOL;
}

?>