<?php

	abstract class Sub
	{
		public function make()
		{
			var_dump($this->addToppings());

		 	return $this->layBread()
		 				->addSauces()
		 				->addLettuce();

		 	// ->addToppings()
	 	}

	 	protected abstract function addToppings ();

		protected function layBread ()
		{
		 	var_dump('lay bread');

		 	return $this;
		 }

		 protected function addLettuce ()
		 {
		 	var_dump('lay lettue');

		 	return $this;
		 }

		 protected function addSauces ()
		 {
		 	var_dump('lay sauces');

		 	return $this;
		 }
	}

?>