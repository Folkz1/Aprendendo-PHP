<?php 
//date Y retorna o anos que se está com 4 caracteres e minusculo com 2 caracteres
//o select cria um ambiente de esolha no html fica bem usual
echo "<select>";
for ($i=date("Y"); $i > date("Y")-100; $i--) { 

	echo '<option value = "'.$i.'">'.$i.'</option>';
}

echo "</select>"

 ?>