<?php

$N = array();

for ($i = 0; $i < 20; $i++) 
{
  $N[$i] = intval(fgets(STDIN));
}

for ($i = 0; $i < 10; $i++) 
{
  $aux = $N[$i];
  $N[$i] = $N[19 - $i];
  $N[19 - $i] = $aux;
}

for ($i = 0; $i < 20; $i++) 
{
  echo "N[$i] = " . $N[$i] . "\n";
}

?>