<?php 
echo "Nota 01: ";
$nota1 = fgets(STDIN);
echo "Nota 02: ";
$nota2 = fgets(STDIN);
$resultado = ($nota1 + $nota2) / 2;
$media = number_format ($resultado, 2,',');
echo "A média entre $nota1 e $nota2 é igual a $media.";
?>