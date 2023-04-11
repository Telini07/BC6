<?php
$X = array(fgets(STDIN));

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