<?php 	
//Se usa a classe DateTime(), pois apartir dela dá para deichar mais tipado especificado o que ela é pela função
//crair um objeto para fazer a estância new
$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");
//Aqui está pedindo para somar ao $dt a variavel $periodo que são 15 dias
$dt->add($periodo);

echo '<br>';

//-> para acessar o método usou-se o metodo format
echo $dt->format("d/m/Y H:i:s");


 ?>