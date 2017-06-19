<?php

require_once 'Vertex.class.php';

class Vector {
	private $_x;
	private $_y;
	private $_z;
	private $_w = 0.0;
	public static $verbose = false;

	public function __construct(array $array) {
		if (isset($array['orig']))
			$temp = $array['orig'];
		else
			$temp = new Vertex( array( 'x' => 0.0, 'y' => 0.0, 'z' => 0.0 ) );
		$this->_x = $array['dest']->getX() - $temp->getX();
		$this->_y = $array['dest']->getY() - $temp->getY();
		$this->_z = $array['dest']->getZ() - $temp->getZ();
		$this->_w = $array['dest']->getW() - $temp->getW();
		if (self::$verbose)
			printf("%s constructed\n", $this->__toString());
	}

	public function __destruct() {
		if (self::$verbose)
			printf("%s destructed\n", $this->__toString());
	}

	public function __toString() {
		return sprintf("Vector( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
	}

	public static function doc() {
		$fd = fopen('Vector.doc.txt', 'r');
		while ($fd && !feof($fd)) {
			echo fgets($fd);
		}
	}

	public function getX () {
		return $this->_x;
	}

	public function getY () {
		return $this->_y;
	}

	public function getZ () {
		return $this->_z;
	}

	public function getW () {
		return $this->_w;
	}

	public function magnitude () {
		return (sqrt(($this->_x * $this->_x) + ($this->_y * $this->_y) + ($this->_z * $this->_z)));
	}

	public function normalize() {
		$mag = $this->magnitude();
		$dest = new Vertex( array( 'x' => ($this->_x / $mag), 'y' => ($this->_y / $mag), 'z' => ($this->_z / $mag) ) ); 
		$vec = new Vector( array( 'dest' => $dest ) );
		return ($vec);
	}

	public function add( Vector $rhs ) {
		$x = $this->_x + $rhs->getX();
		$y = $this->_y + $rhs->getY();
		$z = $this->_z + $rhs->getZ();
		$dest = new Vertex( array( 'x' => $x, 'y' => $y, 'z' => $z ) );
		return ( new Vector( array( 'dest' => $dest ) ) );
	}

	public function	sub( Vector $rhs ) {
		$x = $this->_x - $rhs->getX();
		$y = $this->_y - $rhs->getY();
		$z = $this->_z - $rhs->getZ();
		$dest = new Vertex( array( 'x' => $x, 'y' => $y, 'z' => $z ) );
		return ( new Vector( array( 'dest' => $dest ) ) );
	}

	public function opposite() {
		$x = $this->_x * -1.0;
		$y = $this->_y * -1.0;
		$z = $this->_z * -1.0;
		$dest = new Vertex( array( 'x' => $x, 'y' => $y, 'z' => $z ) );
		return ( new Vector( array( 'dest' => $dest ) ) );
	}

	public function scalarProduct( $k ) {
		$x = $this->_x * $k;
		$y = $this->_y * $k;
		$z = $this->_z * $k;
		$dest = new Vertex( array( 'x' => $x, 'y' => $y, 'z' => $z ) );
		return ( new Vector( array( 'dest' => $dest ) ) );
	}

	public function dotProduct( Vector $rhs ) {
		$var = 0.0;
		$var += ($this->_x * $rhs->getX());
		$var += ($this->_y * $rhs->getY());
		$var += ($this->_z * $rhs->getZ());
		return ($var);
	}

	public function	cos( Vector $rhs ) {
		return ( ($this->dotProduct($rhs) / ( $this->magnitude() * $rhs->magnitude() ) ) );
	}

	public function	crossProduct( Vector $rhs ) {
		$x = ($this->_y * $rhs->getZ()) - ($this->_z * $rhs->getY());
		$y = ($this->_z * $rhs->getX()) - ($this->_x * $rhs->getZ());
		$z = ($this->_x * $rhs->getY()) - ($this->_y * $rhs->getX());
		$dest = new Vertex( array( 'x' => $x, 'y' => $y, 'z' => $z ) );
		return ( new Vector( array( 'dest' => $dest ) ) );
	}
}
?>
