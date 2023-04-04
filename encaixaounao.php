<?php
$N = readline();

for ($i = 0; $i < $N; $i++) 
{
    [$A, $B] = explode(" ", readline());
    $len = strlen($B);

    if (substr($A, -$len) == $B) 
    {
        echo "encaixa\n";
    } 
    else 
    {
        echo "nao encaixa";
    }
}
?>