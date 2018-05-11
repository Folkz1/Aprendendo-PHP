<?php
$anoNascimento = 1990;
$nomeCompleto = "Diego";
//usar o segundo nome começando com maiusculo
/**/

$nome = 'Fernando';
$sobrenome = 'Francisco';
//contatenando nome com sobrenome. as aspas para ter espaço
$nomeCompleto1 = $nome ." ". $sobrenome;
echo $nomeCompleto1;

//para no ponto addicionado a leitura do códico quando usado o exit
exit;

echo $nomeCompleto;
echo "<br>";

unset($nomeCompleto);
//unset apaga a variavel

//o isset verifica se a variavel foi definida
if(isset($nomeCompleto)){
	echo $nomeCompleto;
}


?>