<?php 
//Ele fala o dia na semana que se encontra no presente
$diaDaSemana = date("w");
//O switch funciona com uma verdade só e se não for passa para próxima e se for da break e para.
switch ($diaDaSemana) {

	case 0:
	echo "Domingo";
	break;

	case 1:
	echo "Sgunda-feira";
	break;

	case 2:
	echo "Terça-feira";
	break;

	case 3:
	echo "Quarta-feira";
	break;

	case 4:
	echo "quinta-feira";
	break;

	case 5:
	echo "Sexta-feira";
	break;

	case 6:
	echo "Sabado";
	break;

	default;
	echo "data invalida";
}





 ?>