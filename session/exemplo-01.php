<?php 
//trouxe com require_once a session da pagina.
require_once("config.php");

//session_unset($_SESSION["nome"]); para excluir a variavel desejada 
//session_destroy() excluitudo salvo do user
$_SESSION["nome"] = "Hcode";


 ?>