<?php 

$modelo = "Onix";
$placa = "PTE4791";
$data = "23/09/2025";
$velocidade = 106;
$limite = 80;
$valor = 25;

$ex = $velocidade - $limite;
$multa = $ex * $valor;

echo "--------------------------------------------------" . PHP_EOL;
echo " DEPARTAMENTO DE TRÂNSITO DO MARANHÃO - DETRAN/MA " . PHP_EOL;
echo "--------------------------------------------------" . PHP_EOL;

echo "MODELO DO VEÍCULO: ";
echo $modelo . PHP_EOL;
echo "PLACA DO VEÍCULO: ";
echo $placa . PHP_EOL;
echo "DATA DO REGISTRO: ";
echo $data . PHP_EOL;
echo "VELOCIDADE REGISTRADA: ";
echo $velocidade . PHP_EOL;
echo "VELOCIDADE PERMITIDA: ";
echo $limite . PHP_EOL;
echo "VALOR POR KM EXCEDIDO: ";
echo $valor . PHP_EOL;

if ($velocidade > $limite) {
    echo "Você foi multado por exceder o limite de velocidade." . PHP_EOL;
    echo "Você excedeu a velocidade em " . $ex . " km/h." . PHP_EOL;
    echo "Você terá que pagar a multa no valor de R$ " . $multa . " reais." . PHP_EOL;
} else {
    echo "Continue conduzindo com responsabilidade!" . PHP_EOL;
}

echo "--------------------------------------------------" . PHP_EOL;
echo " DEPARTAMENTO DE TRÂNSITO DO MARANHÃO - DETRAN/MA " . PHP_EOL;
echo "--------------------------------------------------" . PHP_EOL;

?>