<?php
    while(true)
    {
        $K = intval(readline());
        if($K == 0){
            break;
        }
        $lin2 = readline();
        $val2 = explode(' ',$lin2);
        $N = intval($val2[0]);
        $M = intval($val2[1]);
        for($i = 0; $i < $K; $i++)
        {
            $linha = readline();
            $val = explode(' ',$linha);
            $X = intval($val[0]);
            $Y = intval($val[1]);
            
            if ($X == $N || $Y == $M) {
                echo "divisa\n";
            }
            else if ($X > $N && $Y > $M) {
                echo "NE\n";
            }
            else if ($X > $N && $Y < $M) {
                echo "SE\n";
            }
            else if ($X < $N && $Y > $M) {
                echo "NO\n";
            }
            else if ($X < $N && $Y < $M) {
                echo "SO\n";
            }            
        }
    }
?>