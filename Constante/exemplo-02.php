<?php 
//aGORA NO PHP7 É POSSIVEL ADICIONAR constante com array
//mesma estrutura primeiro o nome da constante, note que não possuí $, pois nãi é uma variavel e sim constante, e segundo o dado .
define("BANCO_DE_DADOS", [
	'127.0.0.1',
	'root',
	'password',
	'test'

],true);
//O true possibilita chamar a constante minusculo

print_r(BANCO_DE_DADOS);


 ?>