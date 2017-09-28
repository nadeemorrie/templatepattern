<?php

require ('Sub.php');

class TurkeySub extends Sub
{
	function __construct ()
	{
		var_dump('constructor initialised 2');
	}

	public function addToppings ()
	{
	 	var_dump('lay turkey');

	 	return "trest";
	}
}

?>
