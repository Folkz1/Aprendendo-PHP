<?php 
//Estou incluido o exemplo-01.php que está com a função que eu quero usar
//include "inc/exemplo-01.php";


//deve-se usar mais o require
//faz a mesma coisa que o include é certo que

//require "inc/exemplo-01.php"; 

/*A diferença de include e require é que require só executa se o arquivo exista e não pode ter problemas se não da erro fatal; O include tem mais opções podendo usar mais diretórios até do proprio php*/


//Esse é usado para não chamar um arquivo mais de uma vez o que é muito comum
require_once "inc/exemplo-01.php"; 
require_once "inc/exemplo-01.php";

$resultado = somar(10,25);

echo $resultado;

 ?>