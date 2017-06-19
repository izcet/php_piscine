<?php

class UnholyFactory {

	protected $absorbed;

	public function __construct() {
		$this->absorbed = array();
	}

	public function absorb( $request ) {
		if (is_a( $request, 'Fighter'))
		{
			if (in_array($request, $this->absorbed)) 
				print ("(Factory already absorbed a fighter of type " . $request->fightertype . ")\n");
			else {
				print("(Factory absorbed a fighter of type " . $request->fightertype . ")\n");
				$this->absorbed[ $request->fightertype ] = $request;
			}
		}
		else
			print("(Factory can't absorb this, it's not a fighter)\n");
	}

	public function fabricate( $request ) {
		foreach ( $this->absorbed as $thing ) {
			if ($thing->fightertype == $request)
			{
				print("(Factory fabricates a fighter of type " . $request . ")\n");
				return (clone $this->absorbed[$request] );
			}
		}

		print("(Factory hasn't absorbed any fighter of type " . $request . ")\n");
		return (NULL);
	}

}

?>
