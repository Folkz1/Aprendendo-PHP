<?php 	
//add o session start
require_once("config.php");
//gerar session serve para formas seguras como login não ser o mesmo session sempre
session_regenerate_id();

echo session_id();

var_dump($_SESSION);
 ?>