<?php 
$nome = 'Glaucio';

//Esse é o modo padrão para criar uma função
function teste (){
	//usar dentro dessa função a variavel criada fora da função
	global $nome;
	echo $nome;
}

function teste2 (){
	//é como se fosse outra casa, assim posso usar a mesma variavel aqui dentro
	$nome = ' joão';
	echo $nome.' agora no teste2';

}


//usa-se assim para chamar a function desejada
teste ();
teste2();

 ?>