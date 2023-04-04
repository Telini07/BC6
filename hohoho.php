<?php
$N = 5;//readline();
$ho = "Ho";
$line = "";
for($i=0; $i<$N; $i++)
{
    $line .= $ho;

    if($i < $N - 1)
    {
        $line .= " ";
    }
}

$line .= "!";

echo $line;
?>