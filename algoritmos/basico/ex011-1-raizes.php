<?php 
echo "Este algoritmo foi criado para te ajudar a resolver equações do 2º grau, para isso, insira os valores de 'a', 'b' e 'c': " . PHP_EOL;
echo "Digite o valor de 'a': ";
$a = fgets(STDIN);
echo "Digite o valor de 'b': ";
$b = fgets(STDIN);
echo "Digite o valor de 'c': ";
$c = fgets(STDIN);

echo "Encontrando o delta da equação temos que: " . PHP_EOL;
echo "Δ = b² -4 * a * c" . PHP_EOL;
echo "Δ = " . $b . "² -4 * " . $a . " * " . $c . PHP_EOL;
$b2 = $b ** 2;
echo "Δ = " . $b2 . " -4 * " . $a . " * " . $c  . PHP_EOL;
$m4a = -4 * $a;
echo "Δ = " . $b2 . " " . $m4a . " * " . $c . PHP_EOL;
$d = $b ** 2 -4 * $a * $c;
echo "Δ = " . $d . PHP_EOL;
echo "Para 'a' = " . $a . ", 'b' = " . $b . " e 'c' = " . $c . ", temos Δ = " . $d . "." . PHP_EOL;
if ($d < 0) {
    echo "Não existem raízes para Δ menor que 0!" . PHP_EOL;
} else {
    echo "Encontrando as raízes da equação temos: " . PHP_EOL;
    echo "X = -b +- √Δ / 2 * a" . PHP_EOL;
    $mb = (-1 * $b);
    echo "X = " . $mb . " +- √" . $d . " / 2 * " . $a  . PHP_EOL;
    $rz = sqrt($d);
    $da = 2 * $a;
    echo "X = " . $mb . " +- " . $rz . " / " . $da . PHP_EOL;
    
    echo "X¹ = " . $mb . " + " . $rz . " / " . $da . PHP_EOL;
    $res1 = ($mb + (+1 * $rz)) / $da;
    $rz1 = number_format($res1, 2, ",");
    echo "X¹ = " . $rz1 . PHP_EOL;
    
    echo "X² = " . $mb . " -" . $rz . " / " . $da . PHP_EOL;
    $res2 = ($mb + (-1 * $rz)) / $da;
    $rz2 = number_format($res2, 2, ",");
    echo "X² = " . $rz2 . PHP_EOL;
}
?>