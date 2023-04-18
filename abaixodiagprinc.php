<?php
$N = readline();
$M = array();

for ($i = 0; $i < 12; $i++) 
{
    $M[$i] = array();
    for ($j = 0; $j < 12; $j++) 
    {
        $M[$i][$j] = floatval(readline());
    }
}

$soma = 0;
$aux = 0;

for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < $i; $j++) {
        $soma += $M[$i][$j];
        $aux++;
    }
}

if ($N == 'S') 
{
    echo number_format($soma, 1, '.', '') . "\n";
} 
elseif ($N == 'M') {
    $media = $soma / $aux;
    echo number_format($media, 1, '.', '') . "\n";
}

?>