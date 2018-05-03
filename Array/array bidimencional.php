<?php 

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";
//Nesse array a posição primeira 0 ou 1 quer dizer a marca e o 1,2,3 a carros daquela marca


//posição 0 marca da GM; posição 3 carro camaro;
echo $carros[0][3];

//A função end diz o seguinte; traz o ultimo dentro dessa função; 1 carro da ford último eco sport;
echo end($carros[1]);


 ?>