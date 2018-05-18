passagem de valor por parâmetro<br>
<?php 
$a = 10;
//O que acontece na funçãp n interfere no que est´´a fora
function trocaValor($b){
	$b += 50;
	return $b;

}
//o $a vale 10 e a função soma uma variavel junto a 50;
echo trocaValor($a);
echo "<br>";
echo $a;
 ?>