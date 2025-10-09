<?php 

$tabuada = 5;
$multiplicando = 1;
while ($multiplicando <= 20) {
    echo $multiplicando . " x " . $tabuada . " = " . ($multiplicando * $tabuada) . PHP_EOL;
    $multiplicando = $multiplicando + 1;
}

?>