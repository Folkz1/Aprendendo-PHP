<?php 
//int vai virar inteiro se usa dependendo oq quer ser feito
//GET é uma variavel pré definida que envia pela url
$nome = (int)$_GET['a'];
$nome = (int)$_POST['b'];
//POST NÃO APARECE NA URL
//para restar o get na url usa-se ?a=123&b=456 o 'e' separa e o ?separa do caminho e entra na variavel
//var_dump($nome);

$ip = $_SERVER['SCRIPT_NAME'];

echo $ip;

 ?>