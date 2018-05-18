<?php 
//function; nomne da função; paramentros e dentro das chaves o que ela executará
//Quando possuí um return daí sim é uma função propriamente dito; Esse código deixa mais inteligente o código tendo uma string guardada no ola que pode ser usada para guardar em tudo bem dizer não um echo que terá apenas uma finalidade.
function ola(){

	return "olá mundo <br>";

}

echo ola();
$frase = ola();
//um exemplo de quando usa-se o return ganha-se liberdade podendo usar de outros modos também
echo strlen($frase);

 ?>