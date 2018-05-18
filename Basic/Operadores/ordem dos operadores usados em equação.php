<?php 

$resultado = 10 + 3 / 2;
//primeiro a divisão depois a soma 


$resultado1 = (10 + 3) / 2 > 5 && 10 + 5 < 20;
//O &&, e, quer dizer q as 2 equações precisam ser verdadeiras

$resultado1 = (10 + 3) / 2 || 5 && 10 + 5 < 20;
//O ||, é como se fosse o ou,or. diz q alguma das duas precisam ser verdadeira
var_dump($resultado1);

 ?>