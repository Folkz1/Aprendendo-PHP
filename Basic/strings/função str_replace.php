<?php 

$empresa = "Hcode";

//O str_replace. Troca algo por outro que vc quer. no primeiro lugar ele busca o que vai ser trocado; no segundo se preenche a troca e no terceiro se aponta a variavel
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);
echo $empresa;

 ?>