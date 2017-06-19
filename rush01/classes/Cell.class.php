<?php

class Cell {

	private $contents;
	private $x;
	private $y;
	public static $verbose = false;

	public function __construct( $startx, $starty) {
		$this->clear;
		$this->x = $startx;
		$this->y = $starty;
		if (self::$verbose)
			printf("%s constructed.\n", $this->__toString());
	}

	public function __destruct() {
		if (self::$verbose)
			printf("%s destructed.\n", $this->__toString());
	}

	public function __toString() {
		if ($this->is_empty())
			return sprintf("Cell (%i,%i) (Empty)", $this->x, $this->y);
		else
			return sprintf("Cell (%i,%i) (%s)", $this->x, $this->y, $this->contents);
	}

	public function set( $object ) {
		$temp = $this->contents;
		$this->contents = $object;
		return ( $temp );
	}

	public function get() {
		return ($contents);
	}

	public function clear() {
		$this->set(NULL);
	}

	public function is_empty() {
		if ($this->contents == NULL)
			return ( true ) ;
		else
			return ( false ) ;
	}

	public static function doc() {
		$fd = fopen('Cell.doc.txt', 'r');
		while ($fd && !feof($fd)) {
			echo fgets($fd);
		}
	}

}

?>
