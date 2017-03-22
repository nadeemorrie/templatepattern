<?php

class VeggieSub {
	 public function make() {
	 	return $this->layBread()
	 		->addLettuce()
	 		->addVeggies()
	 		->addSauces();
	 }

	 public function layBread () {
	 	var_dump('lay bread');	 

	 	return $this;	
	 }

	 public function addLettuce () {
	 	var_dump('lay lettue');

	 	return $this;	
	 }

	 public function addVeggies () {
	 	var_dump('lay veggies');	 	

	 	return $this;
	 }

	 public function addSauces () {
	 	var_dump('lay sauces');
	 	return $this;
	 }
	 
}

?>
