<?php 
$nome = "Fabinho";
$nasc = 1992;
$resposta1 = "Sim";
$data = 2025;
$resposta2 = "SIM";
$minimo = 18;
$sexo = "MASCULINO";

$idade = $data - $nasc;
echo "-------------------------------------------------------" . PHP_EOL;
echo "            DEPARTAMENTO DE DEFESA MILITAR             " . PHP_EOL;
echo "          JUNTA MILITAR DO ESTADO DO MARANHÃO          " . PHP_EOL;
echo "-------------------------------------------------------" . PHP_EOL;

echo "Nome do candidato ao Serviço Militar: ";
echo $nome . PHP_EOL;

echo "Olá " . $nome . ", seja bem vindo ao Serviço Militar!" . PHP_EOL;
echo "Informe seu ano de nascimento: ";
echo $nasc . PHP_EOL;
echo "Seu ano de nascimento é " . $nasc . " (S/N)? ";
echo $resposta1 . PHP_EOL;

    if ($resposta1 != "SIM" && $resposta1 != "Sim" && $resposta1 != "sim") {
        echo "Por falta de informação correta, este atendimento será encerrado!" . PHP_EOL;
    } else {
        echo "Informe o ano atual: ";
        echo $data . PHP_EOL;
        echo "O ano atual é " . $data . " (S/N)? ";
        echo $resposta2 . PHP_EOL;
        if ($resposta2 != "SIM" && $resposta2 != "Sim" && $resposta2 != "sim") {
            echo "Por falta de informação correta, este atendimento será encerrado!" . PHP_EOL;
        } else {
            echo "Informe a idade mínima permitida ao Alistamento Militar: ";
            echo $minimo . PHP_EOL;
            echo $nome . " sua idade atual é " . $idade . " anos." . PHP_EOL;
            echo "Informe se o seu gênero de nascimento é masculino(M) ou feminino(F): ";
            echo $sexo . PHP_EOL;
            if ($sexo != "M" && $sexo != "m" && $sexo != "MASCULINO" && $sexo != "Masculino" && $sexo != "masculino") {
                echo "Você é MULHER, não pode se alistar." . PHP_EOL;
                echo "Sugiro que vá lavar louça ou construir um muro!" . PHP_EOL;
            } else if ($resposta1 != "SIM" && $resposta1 != "Sim" && $resposta1 != "sim" && $resposta2 != "SIM" && $resposta2 != "Sim" && $resposta2 != "sim") {
                echo "Seu atendimento foi encerrado!" . PHP_EOL;
            } else if ($idade >= $minimo) {
                echo $nome . " você está apto a servir ao seu País!" . PHP_EOL;
                echo "Honre sua pátria e dê orgulho a esta nação!" . PHP_EOL;
            } else {
                echo $nome . ", infelizmente você é jovem demais para servir!" . PHP_EOL;
            }
        }
    }

echo "-------------------------------------------------------" . PHP_EOL;
echo "            DEPARTAMENTO DE DEFESA MILITAR             " . PHP_EOL;
echo "          JUNTA MILITAR DO ESTADO DO MARANHÃO          " . PHP_EOL;
echo "-------------------------------------------------------" . PHP_EOL;

?>