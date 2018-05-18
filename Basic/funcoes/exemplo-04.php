<?php 
 function ola(){
//Recupera e retorna em um array todos os parâmetros passados
 	$argumentos = func_get_args();
 	return $argumentos;

 }

var_dump(ola("Bom dia",10));

echo '<br>';

echo ola();


 ?>