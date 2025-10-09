<?php 
echo "Este algoritmo foi criado para te ajudar a encontrar o delta e resolver equações do 2º grau, para isso, insira os valores de 'a', 'b' e 'c':" . PHP_EOL;
echo "Digite o valor de 'a': ";
$a = fgets(STDIN);
echo "Digite o valor de 'b': ";
$b = fgets(STDIN);
echo "Digite o valor de 'c': ";
$c = fgets(STDIN);
echo "Encontrando o delta da equação temos que: " . PHP_EOL;
echo "Δ = b²-4.a.c" . PHP_EOL;
echo "Δ = " . $b . "² - 4 . " . $a . " . " . $c . "." . PHP_EOL;
$b2 = $b ** 2;
echo "Δ = " . $b2 . " - 4 . " . $a . " . " . $c . "." . PHP_EOL;
$m4a = -4 * $a;
echo "Δ = " . $b2 . $m4a . " . " . $c . "." . PHP_EOL;
$m4c = $m4a * $c;
$d = ($b ** 2) -4 * $a * $c;
echo "Δ = " . $d . "." . PHP_EOL;
echo "Para 'a' = " . $a . ", 'b' = " . $b . " e 'c' = " . $c . ", temos Δ = " . $d . "."
?>