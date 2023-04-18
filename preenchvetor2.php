<?php

$T = intval(readline());
$N = array(); 

for ($i = 0; $i < 1000; $i++) 
{
  $N[$i] = $i % $T;
}

for ($i = 0; $i < 1000; $i++) 
{
  echo "N[$i] = " . $N[$i] . "\n";
}

?>