<?php
$N = trim(fgets(STDIN));

$M = array();
for ($i = 0; $i < 12; $i++) 
{
  $linha = array();
  for ($j = 0; $j < 12; $j++) 
  {
    $linha[] = (float) trim(fgets(STDIN));
  }
  $M[] = $linha;
}

$soma = 0;
$aux = 0;

for ($i = 0; $i < 12; $i++) 
{
  for ($j = 11; $j > 11 - $i; $j--) 
  {
    if ($j > 11 - $i && $j > $i) 
    {
      $soma += $M[$i][$j];
      $aux++;
    }
  }
}
if ($N == 'S') 
{
  echo number_format($soma, 1, '.', '') . "\n";
} 
else {
  $media = $soma / $aux;
  echo number_format($media, 1, '.', '') . "\n";
}
?>