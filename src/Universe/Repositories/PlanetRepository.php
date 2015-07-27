<?php namespace Universe\Repositories;

class PlanetRepository extends UniverseRepository {

	/**
	 * constructor for PlanetRepository
	 *
	 */
	public function __construct() {
		parent::__construct(\App::make('\Universe\Models\Planet'));

		$planet = \App::make('\Universe\Models\Planet');
		$planet->fill([
			'id'   => 1,
			'name' => 'Planet 1x2',
			'x'    => 1,
			'y'    => 2
		]);
		$this->fixtures->put('PLANET_1_2', $planet);

		$planet = \App::make('\Universe\Models\Planet');
		$planet->fill([
			'id'   => 2,
			'name' => 'Planet 3x1',
			'x'    => 3,
			'y'    => 1
		]);
		$this->fixtures->put('PLANET_3_1', $planet);
	}
}