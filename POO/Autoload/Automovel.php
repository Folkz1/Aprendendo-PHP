<?php 

abstract class Automovel implements Veiculo {

	public function acelerar($velocidade)
	{

		echo "O veiculo acelerou até ". $velocidade . "Km/h";
	}
	public function frenar($velocidade)
	{

		echo "O veículo frenou até " . $velocidade . "Km/h";

	}
	public function trocarMarcha($marcha)
	{
		echo "O veículo engatou a marcha " . $marcha; 
	}
}

 ?>