<?php 

$nome = "Fabinho";
$nasc = 1992;
$resposta1 = "SIM";
$data = 2025;
$resposta2 = "sim";
$minimo = 16;
$resposta3 = "Sim";

$idade = $data - $nasc;

echo "*******************************************************" . PHP_EOL;
echo "*            TRIBUNAL DE JUSTIÇA ELEITORAL            *" . PHP_EOL;
echo "*             CARTÓRIO REGIONAL ELEITORAL             *" . PHP_EOL;
echo "*******************************************************" . PHP_EOL;

echo "Nome do(a) Eleitor(a): ";
echo $nome . PHP_EOL;
echo "Olá " . $nome . ", seja bem vindo ao Sistema Eleitoral!" . PHP_EOL;
echo "Informe seu ano de nascimento: ";
echo $nasc . PHP_EOL;
echo "Seu ano de nascimento é " . $nasc . " (S/N)? ";
echo $resposta1 . PHP_EOL;

if ($resposta1 != "SIM" && $resposta1 != "Sim" && $resposta1 != "sim") {
    echo "Por falta de informação correta, este atendimento será encerrado!" . PHP_EOL;
} else {
    echo "Informe o ano atual: ";
    echo $data . PHP_EOL;
    echo "O ano atual é ", $data, " (S/N)? ";
    echo $resposta2 . PHP_EOL;
    if ($resposta2 != "SIM" && $resposta2 != "Sim" && $resposta2 != "sim") {
        echo "Por falta de informação correta, este atendimento será encerrado!" . PHP_EOL;
    } else {
        echo "Informe a idade mínima permitida a votar: ";
        echo $minimo . PHP_EOL;
        echo $nome . " sua idade atual é " . $idade . " anos." . PHP_EOL;
        if ($resposta3 != "SIM" && $resposta3 != "Sim" && $resposta3 != "sim") {
            echo "Por falta de informação correta, este atendimento será encerrado!" . PHP_EOL;
        } else if ($idade >= $minimo) {
            echo $nome . " você está apto a votar, vote consciente!" . PHP_EOL;            
        } else {
            echo $nome . " infelizmente você é jovem demais para votar!" . PHP_EOL;            
        }   
    }
}

echo "*******************************************************" . PHP_EOL;
echo "*            TRIBUNAL DE JUSTIÇA ELEITORAL            *" . PHP_EOL;
echo "*             CARTÓRIO REGIONAL ELEITORAL             *" . PHP_EOL;
echo "*******************************************************" . PHP_EOL;

?>