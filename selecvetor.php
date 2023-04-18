<?php
$A = array();

for ($i = 0; $i < 100; $i++) 
{
    $A[$i] = floatval(fgets(STDIN));
}
  
  for ($i = 0; $i < 100; $i++) 
  {
    if ($A[$i] <= 10) 
    {
      echo "A[$i] = " . number_format($A[$i], 1) . "\n";
}
}
  
  ?>