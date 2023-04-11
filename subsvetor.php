<?php
//$X[10] = array(fgets(STDIN));

$X = array(0, -5, 63, 0, 5, 2, -5, 8, 0, 10);

for($i = 0; $i < count($X); $i++)
{
if ($X[$i] <= 0)
{
    $X[$i] = 1;
}
}
for($i = 0; $i < count($X); $i++)
{
    echo "X[" . $i . "] = " . $X[$i]. "\n";
}
?>