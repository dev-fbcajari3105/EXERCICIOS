<?php 
echo "Qual é o seu nome?";
$nome = fgets(STDIN) . PHP_EOL;
echo "Olá " . $nome . ", é um prazer te conhecer!";
?>