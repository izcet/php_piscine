<?php

class Obstacle {

	# x and y? size? shape?
	public static $verbose = false;

	public function __construct( $startx, $starty) {
		if (self::$verbose)
			printf("%s constructed.\n", $this->__toString());
	}

	public function __destruct() {
		if (self::$verbose)
			printf("%s destructed.\n", $this->__toString());
	}

	public function __toString() {
			return sprintf("A dice roller");
	}


	public static function doc() {
		$fd = fopen('Obstacle.doc.txt', 'r');
		while ($fd && !feof($fd)) {
			echo fgets($fd);
		}
	}



}

?>
