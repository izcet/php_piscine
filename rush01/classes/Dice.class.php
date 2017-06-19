<?php

class Dice {
	
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

	public static function roll ( $num_dice ) {
		$current = intval($num_dice);
		$num = 0;
		while ( $current > 0 ) {
			$num += rand(1, 6);
			$current--;
		}
		if (self::$verbose)
			printf("(%i) Dice rolled for a total of (%i)\n", $num_dice, $num);
		return ( $num );
	}

	public static function doc() {
		$fd = fopen('Dice.doc.txt', 'r');
		while ($fd && !feof($fd)) {
			echo fgets($fd);
		}
	}

}
?>
