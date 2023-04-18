<?php
$X = array();

for($i = 0; $i < 10; $i++)
{
    $x = intval(fgets(STDIN));
    if ($x <= 0) 
    {
        $x = 1;
    }
    array_push($X, $x);
}
for($i = 0; $i < 10; $i++)
{
    echo "X[$i] = " . $X[$i] . "\n";
}
?>