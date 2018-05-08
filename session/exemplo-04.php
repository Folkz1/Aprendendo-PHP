<?php 	
//add o session start
require_once("config.php");
//gerar session
session_regenerate_id();

echo session_id();

var_dump($_SESSION);
 ?>