<?

class NightsWatch {

	private $fighters;

	public function __construct() {
		$fighters = array();
	}

	public function recruit( $person ) {
		if ( is_a( $person, 'IFighter' ) )
			$this->fighters[] = $person;

	}

	public function fight() {
		foreach( $this->fighters as $fighter ) {
			$fighter->fight();
		}
	}

}
