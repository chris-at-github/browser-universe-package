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
		$this->fixtures->put('GAME_A0', $game);

		$game = \App::make('\Universe\Models\Game');
		$game->fill([
			'id'   => 2,
			'name' => 'Game B1',
			'turn' => 7,
			'map'  => 'MAP_A1'
		]);
		$this->fixtures->put('GAME_B1', $game);
	}
}