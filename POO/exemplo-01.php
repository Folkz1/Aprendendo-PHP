<?php 

class Pessoa {
	//public é para todo mundo ter acesso
	public $nome;//atributo

	public function falar(){//método
		//$this para usar dentro do método
		return "O meu nome é ". $this->nome;

	}

}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();
 ?>