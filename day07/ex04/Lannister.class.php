<?php

class Lannister {

	public function sleepWith( $other ) {
		if (!is_a($other, 'Lannister'))
			print("Let's do this." . PHP_EOL);
		else
			print("Not even if I'm drunk !" . PHP_EOL);
	}

}

?>
