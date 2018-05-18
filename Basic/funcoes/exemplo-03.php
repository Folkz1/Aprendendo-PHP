<?php 
//O parâmetro dá para definir um valor padrão e isso vai ser o que você vai chamar na hora de mostrar a função
//QUando for um parâmetro obrigatório deixar a esquerda no código onde se aloca os parâmetros

function ola($texto, $periodo = "Bom dia"){

	return "olá $texto! $periodo! <br>";


}
//pode deixar os por padrão ou passar outros valores na função
echo ola("mundo");
echo ola("Glaucio", "Boa tarde");
echo ola("Diego");
 ?>