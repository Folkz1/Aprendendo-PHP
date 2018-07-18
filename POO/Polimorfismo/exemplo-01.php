<?php 

class Animal {
	public function falar(){
		return "Som";
	}
	public function mover(){
		return "Andar";
	}
}
class Cachorro extends Animal {
	public function falar(){
		return "late";
	}

}
class Gato extends Animal {
	public function falar(){
		return "miau, miau ...";
	}
}
class Passaro extends Animal {
	public function falar(){
		return "Canta";
	}
	public function mover() {
		return "voa e " . parent::mover();//parent traz a classe raiz a classe pai
	}
}
$piu = new Passaro();
echo $piu->falar() . "<br/>";
echo $piu->mover() . "<br/>";
echo "-----------------------<br/>";
$cat = new Gato();
echo $cat->falar() . "<br/>";
echo $cat->mover() . "<br/>";
echo "-----------------------<br/>";
$pluto = new Cachorro();
echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";
 ?>