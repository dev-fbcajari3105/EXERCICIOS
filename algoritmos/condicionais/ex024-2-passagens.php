<?php

$distancia = 60;
$passagem = ;
$Resp_assento = "S";
$idade = 32;
$cupom = "N";
$Desc_cupom = ;
$passagem_cupom = ;
$meia_passagem = ;
$M_passagem_Cupom = ;
$Pconfort = ;
$Pconfort_Cupom = ;
$meia_Pconfort = ;
$M_Pconfort_Cupom = ;
$Resp_parcela = "";
$vezes = ;
$passagem_Cupom_Parce_juros = ;
$M_passagem_Cupom_Parce_juros = ;
$Pconfort_Cupom_Parce_juros = ;
$M_Pconfort_Cupom_Parce_juros = ;
$taxa_Parce = ;
$juros = ;
$juros_de_cadaP = ;

echo "----------------------------------------------" . PHP_EOL;
echo "         COMPANHIA DE VIAGENS GEREBA          " . PHP_EOL;
echo "    PORQUE JEREBA É COM 'J' E NÃO COM 'G'     " . PHP_EOL;
echo "----------------------------------------------" . PHP_EOL;
echo "" . PHP_EOL;
echo "Distância a ser percorrida em Km: ";
echo $distancia . PHP_EOL;

if ($distancia > 500) {
    echo "A distancia não é cobrida pelos serviços" . PHP_EOL;
    echo "Programa encerrado." . PHP_EOL;
}else {
    if ($distancia <= 25) {
        $passagem = 1 * $distancia;
        echo "Preço atual da passagem: R$ " . $passagem . " reais." . PHP_EOL;
    } else {
        if ($distancia > 25 && $distancia  <= 50) {
            $passagem = 2 * $distancia;
            echo "Preço atual da passagem: R$ " . $passagem . " reais." . PHP_EOL;
        } else {
            if ($distancia > 50 && $distancia <= 75) {
                $passagem = 3 * $distancia;
                echo "Preço atual da passagem: R$ " . $passagem . " reais." . PHP_EOL;
            } else {
                if ($distancia > 75 && $distancia <= 100) {
                    $passagem = 4 * $distancia;
                    echo "Preço atual da passagem: R$ " . $passagem . " reais." . PHP_EOL;
                } else {
                    if ($distancia > 100 && $distancia <= 150) {
                        $passagem = 6 * $distancia;
                        echo "Preço atual da passagem: R$ " . $passagem . " reais" . PHP_EOL;
                    } else {
                        if ($distancia > 150 && $distancia <= 200) {
                            $passagem = 8 * $distancia;
                            echo "Preço atual da passagem: R$ " . $passagem . " reais." . PHP_EOL;
                        } else {
                            if ($distancia > 200 && $distancia <= 250) {
                                $passagem = 10 * $distancia;
                                echo "Preço atual da passagem: R$ " . $passagem . " reais." . PHP_EOL;
                            } else {
                                if ($distancia > 250 && $distancia <= 300) {
                                    $passagem = 12 * $distancia;
                                    echo "Preço atual da passagem: R$ " . $passagem . " reais." . PHP_EOL;
                                } else {
                                    if ($distancia > 300 && $distancia <= 400) {
                                        $passagem = 16 * $distancia;
                                        echo "Preço atual da passagem: R$ " . $passagem . " reais."  . PHP_EOL;
                                    } else {
                                        if ($distancia > 400 && $distancia <= 500) {
                                            $passagem = 20 * $distancia;
                                            echo "Preço atual da passagem: R$ " . $passagem . " reais." . PHP_EOL;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
echo "Deseja viajar no assento confort (S/N)? ";
echo $Resp_assento . PHP_EOL;

if ($Resp_assento != "N" && $Resp_assento != "S") {
    echo "Programa encerrado devido a falta de informação correta" . PHP_EOL;
} else {
    if ($Resp_assento == "N") {
    echo "Atualmente o valor da passagem é: R$ " . $passagem . " reais." . PHP_EOL;
    echo "Crianças de 0 a 8 anos pagam meia passagem." . PHP_EOL;
    echo "Idade do passageiro: ";
    echo $idade . PHP_EOL;
    } else {
        if ($idade > 8) {
            echo "Digite o cupom aplicável: ";
            echo $cupom . PHP_EOL;
            
            $Desc_Cupom = $passagem * ($cupom/100);
            $passagem_Cupom = $passagem - $Desc_Cupom;
            
            echo "Preço atual da passagem : R$ " . $passagem_Cupom . " reais." . PHP_EOL;
        } else {
            echo "Deseja parcelar (S/N)? ";
            echo $Resp_parcela . PHP_EOL;
            if ($Resp_parcela != "N" && $Resp_parcela != "S") {
                echo "Programa encerrado devido informação incorreta" . PHP_EOL;
            } else {
                if ($Resp_parcela == "N") {
                    echo "O valor avista é de: R$ " . $passagem_Cupom . " reais." . PHP_EOL;
                } else {
                    if ($Resp_parcela == "S") {
                        echo "De quantas vezes ?";
                        echo $vezes . PHP_EOL;
                        echo "Taxa de juros da parcela: ";
                        echo $taxa_Parce . PHP_EOL;
                        
                        $juros = $passagem_Cupom * ($taxa_Parce/100);
                        $juros_de_cadaP = $juros / $vezes;
                        $passagem_Cupom_Parce_juros = ($passagem_Cupom / $vezes) + $juros_de_cadaP;
                        
                        echo "Serão " . $vezes . " parcelas de: R$ " . $passagem_Cupom_Parce_juros . " reais." . PHP_EOL;
                    }
                }
            }
        }
    }
}
if ($idade <= 8) {
    $meia_passagem = $passagem / 2;
    echo "Valor da meia passagem: RS " . $meia_passagem . " reais." . PHP_EOL;
    echo "Digite o cupom aplicável: ";
    echo $cupom . PHP_EOL;
 
    $Desc_Cupom = $meia_passagem * ($cupom/100);
    $M_passagem_Cupom = $meia_passagem - $Desc_Cupom;
 
    echo "Preço atual da passagem: R$ " . $M_passagem_Cupom . " reais." . PHP_EOL;

} else {
        echo "Deseja parcelar (S/N)? ";
        echo $Resp_parcela . PHP_EOL;
        if ($Resp_parcela != "N" && $Resp_parcela != "S") {
            echo "Programa encerrado devido informação incorreta" . PHP_EOL;
        } else {
            if ($Resp_parcela == "N") {
              echo "O valor avista é de: R$ " . $M_passagem_Cupom . " reais." . PHP_EOL;
            } else {
                if ($Resp_parcela == "S") {
                   echo "De quantas vezes? ";
                   echo $vezes . PHP_EOL;
                   echo "Taxa de juros da parcela: ";
                   echo $taxa_Parce . PHP_EOL;

                   $juros = $M_passagem_Cupom * ($taxa_Parce/100);
                   $juros_de_cadaP = $juros / $vezes;
                   $M_passagem_Cupom_Parce_juros = ($M_passagem_Cupom / $vezes) +  $juros_de_cadaP;

                   echo "Serão " . $vezes . " parcelas de: R$ " . $M_passagem_Cupom_Parce_juros . " reais." . PHP_EOL;
                }
           }
      }
}
?>