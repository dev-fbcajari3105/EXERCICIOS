<?php 
echo "Informe um número: ";
$numero1 = fgets(STDIN);
echo "Informe outro número: ";
$numero2 = fgets(STDIN);
$resultado = $numero1 + $numero2;
echo "A soma entre $numero1 e $numero2 é igual a $resultado.";
?>