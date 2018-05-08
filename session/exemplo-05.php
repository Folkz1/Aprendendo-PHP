<?php 

require_once("config.php");

echo session_save_path();
echo "<br>";

var_dump(session_status());
echo "<br>";

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo " as sessões estiverem desabilitadas";
		break;
	
	case PHP_SESSION_DISABLED:
		echo " as sessões estiverem habilitadas, mas nenhuma existir.";
		break;

	default: 
		echo "as sessões estiverem habilitadas, e uma existir.";
		break;
}



 ?>