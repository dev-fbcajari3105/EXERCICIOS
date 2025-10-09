<?php 
$idade = 17;
echo "Olá Mundo!" . PHP_EOL;
echo "Eu tenho $idade anos";
echo PHP_EOL . PHP_EOL;
if ($idade >= 18) {
    echo "Você só poderá entrar, se tiver mais de 18 anos.\n";
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Você pode entrar.\n";
} else {
    echo "Você só poderá entrar, se tiver mais de 18 anos.\n";
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Você não pode entrar.\n";   
};
?>