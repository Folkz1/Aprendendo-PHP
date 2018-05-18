<?php 
$salario  = 946.00;
function salario(&$s):float{

	return $s*3;

}
//exemplo que a o return consegue fazer uma função flutuante
echo "José recebeu 3 salários: ".(salario($salario));
echo "<br>";
echo $salario;
 ?>