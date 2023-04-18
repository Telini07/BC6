<?php

$N = intval(fgets(STDIN));

$X = array_map('intval', explode(' ', fgets(STDIN)));

$menorVal = $X[0];
$pos = 0;

for ($i = 1; $i < $N; $i++) 
{
    if ($X[$i] < $menorVal) 
    {
        $menorVal = $X[$i];
        $pos = $i;
    }
}

echo "Menor valor: $menorVal\n";
echo "Posicao: $pos\n";

?>