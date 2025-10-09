<?php 

$peso = 56;
$altura = 1.63;
$resultado = $peso / ($altura ** 2);
$imc = number_format ($resultado, 2,',');

if ($imc < 18.5) {
    echo "Seu IMC é de " . $imc . " Kg/m².";
    echo "Você está abaixo do peso";
} else if ($imc >= 18.5 && $imc < 24.9) {
    echo "Seu IMC é de " . $imc . " Kg/m².";
    echo "Você está em seu peso normal";
} else if ($imc >= 25 && $imc < 29.9) {
    echo "Seu IMC é de " . $imc . " Kg/m².";
    echo "Você está com sobrepeso";
} else if ($imc >= 30 && $imc < 34.9) {
    echo "Seu IMC é de " . $imc . " Kg/m².";
    echo "Você está com obesidade Grau I";
} else if ($imc >= 35 && $imc < 39.9) {
    echo "Seu IMC é de " . $imc . " Kg/m².";
    echo "Você está com obesidade Grau II";
} else {
    echo "Seu IMC é de " . $imc . " Kg/m².";
    echo "Você está com obesidade Grau III (ou mórbida)";
}
?>