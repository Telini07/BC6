<?php
$velocidade_media = readline();
$distancia = readline();
$consumo_medio = readline();


$total_horas = $distancia / $velocidade_media;
$total_horas = number_format($total_horas, 2);
$gasto = $distancia / $consumo_medio;
$gasto = number_format($gasto, 2);

echo("Total horas: ". $total_horas. "\n");
echo("Total combustivel: ". $gasto. "\n");

?>