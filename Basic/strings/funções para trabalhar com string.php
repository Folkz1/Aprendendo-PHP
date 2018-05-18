<?php 

$nome = "joao rangel";

//essa função transforma o texto em letra maiuscula
$nome = strtoupper($nome);

echo $nome;

//transforma a string em minusculo
$nome = strtolower($nome);

echo "<br>";

echo $nome;

echo "<br>";

//A primeira letra de cada palavra fica maiuscula
echo ucwords($nome);

echo "<br>";
//Só a primeira letra fica maiuscula
echo ucfirst($nome);


 ?>