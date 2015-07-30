<?php namespace Universe\Repositories;

class ShipRepository extends UniverseRepository {

	/**
	 * constructor for ShipRepository
	 *
	 */
	public function __construct() {
		parent::__construct(\App::make('\Universe\Models\Ship'));

		$ship = \App::make('\Universe\Models\Ship');
		$ship->fill([
			'id'   => 1,
			'name' => 'Mule',
			'x'    => 1,
			'y'    => 1
		]);
		$this->fixtures->put('SHIP_A1', $ship);
	}
}