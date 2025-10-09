<?php 
$produto = "processador";
$resposta1 = "sim";
$valor = 1000;
$resposta2 = "sim";
$cliente = "Fabinho";
$resposta3 = "sim";
$cpf = "605.506.553-36";
$sexo = "M";
$resposta4 = "sim";
$desconto = 10;
$resposta5 = "sim";

$total = $valor - ($valor * $desconto / 100);
$final = number_format($total, 2, ',');

echo "----------------------------------------------------------------" . PHP_EOL;
echo "                         LOJAS JEREBAS                          " . PHP_EOL;
echo "         SEU LAR MAIS COMPLETO, SUA PATROA MAIS FELIZ!          " . PHP_EOL;
echo "----------------------------------------------------------------" . PHP_EOL;
echo "" . PHP_EOL;

echo "----------------------------------------------------------------" . PHP_EOL;
echo "*******************SETOR DE VENDAS AO CLIENTE*******************" . PHP_EOL;
echo "----------------------------------------------------------------" . PHP_EOL;
echo "" . PHP_EOL;

echo "Informe o produto: ";
echo $produto . PHP_EOL;
echo "O produto é " . $produto . " [S/N]? ";
echo $resposta1 . PHP_EOL;

if ($resposta1 != "SIM" && $resposta1 != "Sim" && $resposta1 != "sim") {
    echo "Por falta de informações, este atendimento será encerrado!" . PHP_EOL;
    echo "ATENDIMENTO FINALIZADO!" . PHP_EOL;
} else {
    echo "Informe o valor do produto: R$ ";
    echo $valor . PHP_EOL;
    echo "O valor do produto é " . $valor . " [S/N]? ";
    echo $resposta2 . PHP_EOL;
    if ($resposta2 != "SIM" && $resposta2 != "Sim" && $resposta2 != "sim") {
        echo "Por falta de informações, este atendimento será encerrado!" . PHP_EOL;
        echo "ATENDIMENTO FINALIZADO!" . PHP_EOL;
    } else {
        echo "Informe o nome do cliente: ";
        echo $cliente . PHP_EOL;
        echo "O nome do(a) cliente é " . $cliente . " [S/N]? ";
        echo $resposta3 . PHP_EOL;
        if ($resposta3 != "SIM" && $resposta3 != "Sim" && $resposta3 != "sim") {
            echo "Por falta de informações, este atendimento será encerrado!" . PHP_EOL;
            echo "ATENDIMENTO FINALIZADO!" . PHP_EOL;
        } else {
            echo "Informe o CPF do(a) cliente: ";
            echo $cpf . PHP_EOL;
            if ($cpf == "") {
                echo "Por falta de informações, este atendimento será encerrado!" . PHP_EOL;
                echo "ATENDIMENTO FINALIZADO!" . PHP_EOL;
            } else {
                echo "Informe o gênero do(a) cliente [M/F]: ";
                echo $sexo . PHP_EOL;
                echo "O gênero do(a) cliente é " . $sexo . "[S/N]? ";
                echo $resposta4 . PHP_EOL;
                if ($resposta4 != "SIM" && $resposta4 != "Sim" && $resposta4 != "sim") {
                    echo "Por falta de informações, este atendimento será encerrado!" . PHP_EOL;
                    echo "ATENDIMENTO FINALIZADO!" . PHP_EOL;
                } else {
                    echo "Valor do desconto promocional: R$ ";
                    echo $desconto . PHP_EOL;
                    echo "O valor do desconto promocional é " . $desconto . "% [S/N]? ";
                    echo $resposta5 . PHP_EOL;
                    if ($resposta5 != "SIM" && $resposta5 != "Sim" && $resposta5 != "sim") {
                        echo "Por falta de informações, este atendimento será encerrado!" . PHP_EOL;
                        echo "ATENDIMENTO FINALIZADO!" . PHP_EOL;
                    } else {
                        echo "Seu produto custará R$ " . $final . " reais." . PHP_EOL;
                    }
                }
            }
        }
    }
}

echo "" . PHP_EOL;

echo "----------------------------------------------------------------" . PHP_EOL;
echo "                         LOJAS JEREBAS                          " . PHP_EOL;
echo "         SEU LAR MAIS COMPLETO, SUA PATROA MAIS FELIZ!          " . PHP_EOL;
echo "----------------------------------------------------------------" . PHP_EOL;
?>