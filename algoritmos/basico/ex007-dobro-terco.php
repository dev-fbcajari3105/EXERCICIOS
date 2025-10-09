<?php 
echo "Informe um número: ";
$numero = fgets(STDIN) . PHP_EOL;
echo "O número escolhido foi " . $numero . "." . PHP_EOL;
$res1 = $numero ** 2;
$dobro = number_format ($res1, 2, ',');
echo "O dobro de " . $numero . " é " . $dobro . PHP_EOL;
$res2 = $numero / 3;
$terco = number_format ($res2, 2,',');
echo "O terço de " . $numero . " é " . $terco . ".";
?>