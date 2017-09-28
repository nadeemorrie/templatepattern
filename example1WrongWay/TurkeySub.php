<?php

class TurkeySub
{
	 public function make()
	 {
	 	return $this
	 			->layBread()
	 			->addTurkey()
	 			->addLettuce()
	 			->addSauces();
	 }

	 public function layBread ()
	 {
	 	var_dump('lay bread');

	 	return $this;
	 }

	 public function addLettuce ()
	 {
	 	var_dump('lay lettuce');

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
