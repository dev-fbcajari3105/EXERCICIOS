<?php 
echo "Informe um número: ";
$numero = readline() . PHP_EOL;
$antecessor =  $numero - 1;
$sucessor = $numero + 1;
echo "O antecessor de $numero é $antecessor" . PHP_EOL;
echo "O sucessor de $numero é $sucessor." . PHP_EOL;
?>