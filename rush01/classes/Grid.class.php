<?php

class Grid {

	public static $verbose = false;
	public $width;
	public $height;
	public $cells;
	public $ships;
	public $obstacles;

	public function __construct( $startWidth, $startHeight) {
		$this->width = intval($startWidth);
		$this->height = intval($startHeight);
		
		#initialize cells

		if (self::$verbose)
			printf("%s constructed.\n", $this->__toString());
	}

	public function __destruct() {

		#destroy cells
		#destroy ships?

		if (self::$verbose)
			printf("%s destructed.\n", $this->__toString());
	}

	public function __toString() {
		if (self::$verbose)
		{

		}
		else
			return sprintf("Grid (w=%i,h=%i)", $this->width, $this->height);
	}


	public static function doc() {
		$fd = fopen('Grid.doc.txt', 'r');
		while ($fd && !feof($fd)) {
			echo fgets($fd);
		}
	}



}

?>
