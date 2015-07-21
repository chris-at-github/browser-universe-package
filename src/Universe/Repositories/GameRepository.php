<?php namespace Universe\Repositories;

class GameRepository extends UniverseRepository {

	/**
	 * constructor for GameRepository
	 *
	 */
	public function __construct() {
		parent::__construct(\App::make('\Universe\Models\Game'));
	}

	/**
	 * Get all of the models from the database
	 *
	 * @param array $columns
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	public function findAll($columns = ['*']) {
		$games = \Illuminate\Support\Collection::make();

		$game = \App::make('\Universe\Models\Game');
		$game->fill([
			'id'		=> 1,
			'name' 	=> 'Game A0',
			'turn'	=> 3
		]);
		$games->put('a0', $game);

		$game = \App::make('\Universe\Models\Game');
		$game->fill([
			'id' 		=> 2,
			'name' 	=> 'Game B1',
			'turn' 	=> 7
		]);
		$games->put('b1', $game);

		return $games;
	}
}