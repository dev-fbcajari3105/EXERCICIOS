<?php 
echo "Digite uma distância em metros: ";
$distancia = readline() . PHP_EOL;
$res1 = $distancia / 1000;
$km = number_format($res1, 2, ',');
echo "A distância corresponde a ". $km . " km.". PHP_EOL;
$res2 = $distancia / 100;
$hm = number_format($res2, 2, ',');
echo "A distância corresponde a ". $hm . " hm.". PHP_EOL;
$res3 = $distancia / 10;
$dam = number_format($res3, 2, ',');
echo "A distância corresponde a ". $dam . " dam.". PHP_EOL;
$res4 = $distancia * 10;
$dm = number_format($res4, 2, ',');
echo "A distância corresponde a ". $dm . " dm.". PHP_EOL;
$res5 = $distancia * 100;
$cm = number_format($res5, 2, ',');
echo "A distância corresponde a ". $cm . " cm.". PHP_EOL;
$res6 = $distancia * 1000;
$mm = number_format($res6, 2, ',');
echo "A distância corresponde a ". $mm . " mm.". PHP_EOL;
?>