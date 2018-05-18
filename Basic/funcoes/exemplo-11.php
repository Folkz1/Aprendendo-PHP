<?php 
//função anonima
function teste($callback){
	//processo lento
	$callback();

}

teste(function(){
	echo "Termino";
});

 ?>