<?php
$X = array();

for ($i = 0; $i < 100; $i++) 
{
    $X[$i] = intval(readline());
    $X[$i] = number_format($X[$i], 1, ".", "");
}

for ($i = 0; $i < 100; $i++) 
{
    if($X[$i] <= 10)
    {
        echo "A[$i] = " . $X[$i] . "\n";
    }
}