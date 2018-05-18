<?php 	
//$i é o contador; o segundo <10 é até quando ele vai funcionar; e por último de quanto em quanto ele vai somando até a 10
for ($i = 0; $i < 1000; $i+=5 ){

	if($i >= 200 && $i <= 800) continue;

	if($i === 900) break;

	echo $i. "<br>";
}





 ?>