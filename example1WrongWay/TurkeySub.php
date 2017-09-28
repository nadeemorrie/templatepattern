<?php

class TurkeySub
{
	 public function make()
	 {
	 	return $this->layBread()
	 				->addLettuce()
	 				->addTurkey()
	 				->addSauces();
	 }

	 public function layBread ()
	 {
	 	var_dump('lay bread');

	 	return $this;
	 }

	 public function addLettuce ()
	 {
	 	var_dump('lay lettue');

	 	return $this;
	 }

	 public function addTurkey ()
	 {
	 	var_dump('lay turkey');

	 	return $this;
	 }

	 public function addSauces ()
	 {
	 	var_dump('lay sauces');

	 	return $this;
	 }
}

?>
