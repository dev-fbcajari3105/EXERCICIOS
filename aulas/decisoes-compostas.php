<?php 
$idade = 17;
$pessoas = 1;
echo "Olá Mundo!" . PHP_EOL;
echo "Eu tenho $idade anos";
echo PHP_EOL . PHP_EOL;
echo "Você só poderá entrar, se tiver mais de 18 anos ou a partir de 16 anos acompanhado.\n";
if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Você pode entrar.\n";
} else if ($idade >= 16 && $pessoas > 1) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Você está acompanhado com um adulto." . PHP_EOL;
    echo "Você pode entrar";
} else {
    echo "Você não pode entrar.\n";   
}
?>