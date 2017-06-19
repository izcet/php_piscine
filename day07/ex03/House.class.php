<?php

abstract class House {
	public abstract function getHouseName();
	public abstract function getHouseMotto();
	abstract public function getHouseSeat();

	public function introduce() {
		print("House " . $this->getHouseName() . " of " . $this->getHouseSeat() . " : \"" . $this->getHouseMotto() . '"' . PHP_EOL);
	}

}

?>
