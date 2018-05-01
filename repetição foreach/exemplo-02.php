<form>
	
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="ok">

</form>
<?php 
//$_GET é o array global que passa pela url  e a key que é o nome do input o value é o que será digitado
if (isset($_GET)){

	foreach ($_GET as $key => $value) {
		echo "Nome do campo ". $key. '<br>';
		echo "Valor do campo " . $value. '<br>';
		echo "<hr>";
	}
}
 ?>