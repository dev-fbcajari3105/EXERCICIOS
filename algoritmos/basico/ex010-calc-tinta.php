<?php 
echo "Calcule a area a ser pintada e a quantidade de tinta a ser usada:" . PHP_EOL;
echo "Para area a ser pintada, temos as seguntes medidas: " . PHP_EOL;
echo "Largura da parede em metros: ";
$largura = fgets(STDIN) . PHP_EOL;
echo "Altura da parede em metros: ";
$altura = fgets(STDIN) . PHP_EOL;
$p = $largura * $altura;
$perimetro = number_format($p, 2, ',');
echo "Perímetro da parede a ser pintada em metros²: " . $perimetro . " m²." . PHP_EOL;
$t = $p / 2;
$tinta = number_format($t, 2, ',');
echo "A quantidade de tinta para pintar uma parede de " . $perimetro . " m² é de " . $tinta . " litros de tinta.";
?>