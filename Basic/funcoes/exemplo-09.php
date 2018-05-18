<?php 
//para a saída ser o que você quer. usa o :tipoDeSaida(dois ponto e depois o tipo de saída) desejado
//e como será os dados adicionados tipo ...(float ... int ... string ...)
function soma(float ...$valores):float{
	//array_sum soma tudo que estiver dentro do array
	return array_sum($valores);

}

echo var_dump(soma(2,2));
echo "<br>";
echo soma(25,33);
echo "<br>";
echo soma(1.5,3.2);
echo "<br>";

 ?>