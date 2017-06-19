<?php

class Weapon {
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

		$fd = fopen('Weapon.doc.txt', 'r');
		while ($fd && !feof($fd)) {
			echo fgets($fd);
		}
	}



}

?>
