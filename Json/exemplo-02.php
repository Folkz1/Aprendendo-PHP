<?php  

//Essa é a forma de transformar json em php

$json = '[{"nome":"Jo\u00e3o","idade":"25"},{"nome":"Glaucio","idade":"20"}]';

//true para não transformar em objeto e sim array
//transformar o json e array
 $data = json_decode($json, true);

 var_dump($data);


 ?>