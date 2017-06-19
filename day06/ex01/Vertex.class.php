<?php

require_once 'Color.class.php';

class Vertex {
	private $_x;
	private $_y;
	private $_z;
	private $_w = 1.0;
	private $_color;
	public static $verbose = false;

	public function __construct(array $array) {
		if (isset($array['w']))
			$this->_w = floatval($array['w']);
		if (isset($array['color']))
			$this->_color = $array['color'];
		else
			$this->_color = new Color( array( 'red' => 255, 'green' => 255, 'blue' => 255) );
		$this->_x = $array['x'];
		$this->_y = $array['y'];
		$this->_z = $array['z'];
		if (self::$verbose)
			printf("%s constructed\n", $this->__toString());
	}

	public function __destruct() {
		if (self::$verbose)
			printf("%s destructed\n", $this->__toString());
	}

	public function __toString() {
		if (self::$verbose)
			return sprintf("Vertex( x: %0.2f, y: %0.2f, z: %0.2f, w: %0.2f, %s )", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
		else
			return sprintf("Vertex( x: %0.2f, y: %0.2f, z: %0.2f, w: %0.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
	}

	public static function doc() {
		$fd = fopen('Vertex.doc.txt', 'r');
		while ($fd && !feof($fd)) {
			echo fgets($fd);
		}
	}

	public function setX( $new_x ) {
		$this->_x = $new_x;
	}

	public function setY( $new_y ) {
		$this->_y = $new_y;
	}

	public function setZ( $new_z ) {
		$this->_z = $new_z;
	}

	public function setW( $new_w ) {
		$this->_w = $new_w;
	}

	public function set_color( Color $new_color ) {
		$temp = $this->_color;
		$this->_color = $new_color;
		return ($temp);
	}

	public function getX () {
		return $this->_x;
	}

	public function gety () {
		return $this->_y;
	}

	public function getZ () {
		return $this->_z;
	}

	public function getW () {
		return $this->_w;
	}

	public function get_color () {
		return $this->_color;
	}
}

?>
