passagem de valor por referência<br>
<?php 
 
$a = 10;
//Quanto têm o & comercial é passagem de valor por referência puxa o que ta fora
//O que acontece na função muda o valor na variavel
function trocaValor(&$b){
	$b += 50;
	return $b;

}
//o $a vale 10 e a função soma uma variavel junto a 50;
echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;
 ?>