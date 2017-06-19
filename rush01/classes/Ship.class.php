<?php

class Ship {

	require_once 'MovePath.class.php';

	private $activated; #bool

	private $stationary; #bool
	private $distance_moved; #int
	private $max_speed; #int
	private $handling; #int
	private $direction;
	private $last_moved;
	private $last_straight;

	private $HP; #int
	private $HP_max; #int

	private $name; #string
	private $width; #int
	private $length; #int
	
	private $PP; #int
	private $shield; #int
	private $weapons; #array

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

	public function getMovementMinimum() {
		if ($this->stationary)
			return (0);
		else
			return ($this->handling);
	}

	public function getMovementMaximum() {
		if 

	public static function doc() {
		$fd = fopen('Ship.doc.txt', 'r');
		while ($fd && !feof($fd)) {
			echo fgets($fd);
		}
	}



}

?>
