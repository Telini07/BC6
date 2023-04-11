<?php
//$X = array(fgets(STDIN));
$X = array(10, 2, 3, 50, 10, 65, 68, 54);
$X[0] = 1;
for($i = 0; $i > count($X); $i++)
{
    $X[$i] = 2*$X[1];
}

echo "X[0] = ". $X[0];
echo "X[1] = ". $X[1];
echo "X[2] = ". $X[2];
?>