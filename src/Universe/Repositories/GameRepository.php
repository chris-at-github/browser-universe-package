<?php namespace Universe\Repositories;

class GameRepository extends UniverseRepository {

	/**
	 * constructor for GameRepository
	 *
	 */
	public function __construct() {
		parent::__construct(\App::make('\Universe\Models\Game'));

		$game = \App::make('\Universe\Models\Game');
		$game->fill([
			'id'   => 1,
			'name' => 'Game A0',
			'turn' => 3,
			'map'  => 'MAP_A1'
		]);
		$this->collection->put('GAME_A0', $game);

		$game = \App::make('\Universe\Models\Game');
		$game->fill([
			'id'   => 2,
			'name' => 'Game B1',
			'turn' => 7,
			'map'  => 'MAP_A1'
		]);
		$this->collection->put('GAME_B1', $game);
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

		if(isset($options['id']) === true) {
			$map = $this->collection->where('id', (int) $options['id'])->first();
		}

		return $map;
	}
}