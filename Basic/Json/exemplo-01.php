<?php  
$pessoas = array();


array_push($pessoas, array(
	"nome" => "João",
	"idade" => "25"
));

array_push($pessoas, array(
	"nome" => "Glaucio",
	"idade" => "20"
));


//transforma as coisas em java é mais rápido passar de json para php e o contrario
//essa função transforma o array em json 
echo json_encode($pessoas);

//transforma o json em array
 echo json_decode(json)


 ?>