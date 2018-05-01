<?php 

$condicao = true;
//condição rand é de random aparece os numeros aleatorios dentro da delimitação
while ($condicao){
	$numero = rand(1, 10);

	if ($numero === 3){

		echo "TRÊS ! ! !";
		$condicao = false;
	
	}
		else{

		echo $numero. " ";
		
		}

}
//Aqui foi mostrado como ele funciona que ele executa com x coisa for verdade;

 ?>