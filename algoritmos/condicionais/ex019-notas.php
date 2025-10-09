<?php 
$nome = "Fabinho";
$disciplina = "Biologia";
$n1 = 5.25;
$nota1 = number_format($n1, 2,',');
$n2 = 5.5;
$nota2 = number_format($n2, 2,',');
$media = ($n1 + $n2) / 2;
$m_final = number_format($media, 2,',');

echo "-------------------------------------------------------" . PHP_EOL;
echo "     CENTRO DE EDUCAÇÃO TECNOLÓGICA CURSO EM VÍDEO     " . PHP_EOL;
echo "                     MAPA DE NOTAS                     " . PHP_EOL;
echo "-------------------------------------------------------" . PHP_EOL;


echo "Informe o nome do aluno: ";
echo $nome . PHP_EOL;
echo "Informe a disciplina: ";
echo $disciplina . PHP_EOL;
echo "Informe o valor da Nota 01: ";
echo $nota1 . PHP_EOL;
echo "Informe o valor da Nota 02: ";
echo $nota2 . PHP_EOL;

if ($media >= 0 && $media < 5) {
    echo $nome . ", infelizmente sua nota é " . $m_final . " e por isso você está reprovado!" . PHP_EOL;
} else if ($media >= 5 && $media < 7) {
    echo $nome . ", infelizmente sua nota é " . $m_final . " e por isso você está de recuperação!" . PHP_EOL;
} else {
    echo $nome . ", sua nota é " . $m_final . " parabéns!" . PHP_EOL;
    echo "Você está aprovado!" . PHP_EOL;
}

echo "-------------------------------------------------------" . PHP_EOL;
echo "     CENTRO DE EDUCAÇÃO TECNOLÓGICA CURSO EM VÍDEO     " . PHP_EOL;
echo "                     MAPA DE NOTAS                     " . PHP_EOL;
echo "-------------------------------------------------------" . PHP_EOL;

?>