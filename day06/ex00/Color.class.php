<?php
class Color {
	public $red;
	public $green;
	public $blue;
	public static $verbose = false;

	public function __construct(array $array) {
		if (isset($array['rgb']))
		{
			$var = intval($array['rgb']);
			$this->red = ($var & 0xff0000) >> 16;
			$this->green = ($var & 0x00ff00) >> 8;
			$this->blue = ($var & 0x0000ff);
		}
		else
		{
			$this->red = intval($array['red']);
			$this->green = intval($array['green']);
			$this->blue = intval($array['blue']);
		}
		if (self::$verbose)
			printf("%s constructed.\n", $this->__toString());

	}

	public function __destruct() {
		if (self::$verbose)
			printf("%s destructed.\n", $this->__toString());
	}

	public function __toString() {
		return sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
	}

	public static function doc() {
		$fd = fopen('Color.doc.txt', 'r');
		while ($fd && !feof($fd)) {
			echo fgets($fd);
		}
	}

	public function add(Color $other) {
		$newred = $this->red + $other->red;
		$newgre = $this->green + $other->green;
		$newblu = $this->blue + $other->blue;
		$colarr = [ 'red' => $newred, 'green' => $newgre, 'blue' => $newblu ];
		$col = new Color($colarr);
		return $col;
	}

	public function sub(Color $other) {
		$newred = $this->red - $other->red;
		$newgre = $this->green - $other->green;
		$newblu = $this->blue - $other->blue;
		$colarr = [ 'red' => $newred, 'green' => $newgre, 'blue' => $newblu ];
		$col = new Color($colarr);
		return $col;
	}

	public function mult($factor) {
		$newred = $this->red * $factor;
		$newgre = $this->green * $factor;
		$newblu = $this->blue * $factor;
		$colarr = [ 'red' => $newred, 'green' => $newgre, 'blue' => $newblu ];
		$col = new Color($colarr);
		return $col;
	}
}

?>
