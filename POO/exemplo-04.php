<?php 
//métodos mágicos contrutor

class Endereco {
	//Atributos
	private $logradouro;
	private $numero;
	private $cidade;
	//metodos
	public function __construct($l, $n, $c) {
		$this->logradouro = $l;
		$this->numero = $n;
		$this->cidade = $c;
	}

	public function __destruct() {//destroi algo desejado
		var_dump("Destruir");
	}
	public function __toString() {//transforma tudo ek string
		return $this->logradouro. ", ".$this->numero.", ".$this->cidade;
	}

}

$e1 = new Endereco("Rua ademar Gonçalves", 12, "Campo Bom");
echo $e1;
var_dump($e1);



//Para destruir
//unset($e1);



 ?>