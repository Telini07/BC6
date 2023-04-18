<?php
$N = trim(fgets(STDIN));

$M = array();
for ($i = 0; $i < 12; $i++) 
{
  $linha = array();
  for ($j = 0; $j < 12; $j++) 
  {
    $linha[] = floatval(trim(fgets(STDIN)));
  }
  $M[] = $linha;
}

$soma = 0;
$aux = 0;

for ($i = 0; $i < 6; $i++) 
{
  for ($j = $i + 1; $j < 11 - $i; $j++) 
  {
    $soma += $M[$i][$j];
    $aux++;
  }
}
if ($N == "M") 
{
  $media = $soma / $aux;
  echo number_format($media, 1, '.', '') . "\n";
} 
else {
  echo number_format($soma, 1, '.', '') . "\n";
}

?>