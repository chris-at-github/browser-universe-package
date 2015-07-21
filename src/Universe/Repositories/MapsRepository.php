<?php namespace Universe\Repositories;

class MapsRepository extends UniverseRepository {

	/**
	 * constructor for GameRepository
	 *
	 */
	public function __construct($map) {
		parent::__construct(\App::make('\Universe\Models\Maps'));

		$map = \App::make('\Universe\Models\Maps');
		$map->fill([
			'id'   => 1,
			'name' => 'Map A1'
		]);
		$this->collection->put('MAP_A1', $map);
	}

	/**
	 * Get all of the models from the database
	 *
	 * @param array $columns
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	public function findAll($columns = ['*']) {
		return $this->collection;
	}
}