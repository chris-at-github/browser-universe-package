<?php namespace Universe\Repositories;

class MapsRepository extends UniverseRepository {

	/**
	 * constructor for MapsRepository
	 *
	 */
	public function __construct() {
		parent::__construct(\App::make('\Universe\Models\Maps'));

		$map = \App::make('\Universe\Models\Maps');
		$map->fill([
			'id'      => 1,
			'name'    => 'Map A1',
			'width'   => 3,
			'height'  => 3
		]);
		$this->fixtures->put('MAP_A1', $map);
	}
}