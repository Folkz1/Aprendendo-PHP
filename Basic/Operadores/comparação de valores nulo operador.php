<?php 

$a = NULL;
$b = 8;
$c = 10;

echo $a ?? $b ?? $c;
// o ?? ignora se for nulo ajuda muito inves de usar muitos if
 ?>