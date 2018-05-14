<?php 
//Descobre o timestamp da data desejada
//$ts = strtotime("2001-09-11");
//$ts = strtotime("now");
//$ts = strtotime("+1 day");
$ts = strtotime("+1 week");
//Como nos exemplo acima o strtotime aceita uma série de expressões
//Com o timestamp pode usar pra saber qual dia da semana era aquele dia . . .
//l é dia da semana
echo date("l, d/m/Y",$ts);

 ?>