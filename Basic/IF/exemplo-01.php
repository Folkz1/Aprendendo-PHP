<?php 
//a variavel pra chama o if e depois entre aspas a condição.
$qualASuaIdade = 10;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;
if ($qualASuaIdade < $idadeCrianca){
	echo "Criança";

}else if ($qualASuaIdade < $idadeMaior) {
	echo "adolescente";
//else if é para dar opções nas condições
}else if ($qualASuaIdade < $idadeMelhor) {
	echo "adulto";
}
 else {
	echo "idoso";
}
//O else é sempre no final e é só uma vez

echo "<br>";


//separa o bloco por ? que é o então se for verdade e senão for verdade é o :
echo($qualASuaIdade < $idadeMaior)? "Menor de Idade": "Maior de Idade";
 ?>