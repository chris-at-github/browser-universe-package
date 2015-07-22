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

	/**
	 * find one model
	 *
	 * @param array $options
	 * @param  array $columns
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	public function findBy($options = [], $columns = ['*']) {
		$map = null;

		if(isset($options['hid']) === true && $this->collection->has($options['hid']) === true) {
			$map = $this->collection->get($options['hid']);
		}

		return $map;
	}
}