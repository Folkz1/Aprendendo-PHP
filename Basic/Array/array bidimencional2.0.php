<?php 

$pessoas = array();

//array push serve para adicionar um item no array depois dele já criado
array_push($pessoas, array(
	"nome" => "João",
	"idade" => "25"
));

array_push($pessoas, array(
	"nome" => "Glaucio",
	"idade" => "20"
));

print_r($pessoas[0]["nome"]);
//Aqui foi dada a posição na posição 0 e nome dela que será joão

 ?>