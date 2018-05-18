<?php 

$frase = "A repetição é mãe da retenção.";
$palavra = "mãe";
//strpos fala a posição da palavra buscada
$q = strpos($frase, "mãe");

//substr aceita mudanças. a primeira é o que vai ser trocado; a segunda é de onde começa e a terceira até aonde vai.
$texto = substr ($frase, 0, $q);

var_dump($texto);

//strlen conta o numero de palavras contido dentro de uma frase escolhida ou atribuida a ele.
$texto2 = substr($frase,$q+strlen($palavra),strlen($frase));

echo "<br>";
var_dump($texto2);
 ?>