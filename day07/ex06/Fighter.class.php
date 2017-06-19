<?php

abstract class Fighter {

	public $fightertype;

	public function __construct( $string ) {
		$this->fightertype = $string;
	}

	abstract public function fight( $target );

}
?>
