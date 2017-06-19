<?php

class Jaime extends Lannister {

	public function sleepWith( $other ) {
		if (!is_a($other, 'Lannister'))
			print("Let's do this." . PHP_EOL);
		else
		{
			if (is_a($other, 'Cersei'))
				print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
			else
				print("Not even if I'm drunk !" . PHP_EOL);
		}

	}
}

?>
