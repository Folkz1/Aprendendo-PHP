<?php 
//Existe 3 variações para setar a hora do linux, window e utf-8
//LC_ALL para configurar todos abaixo dela.
setlocale(LC_ALL, "pt_BR", "pt_BR.otf-8", "portuguese");
//O strftime é para chamar o que quer ser mostrado. %A dia da semana; $B mês. ucword começar com letra maíscula
echo ucwords(strftime("%r %S"));

 ?>