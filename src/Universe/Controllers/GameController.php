<?php namespace Universe\Controllers;

class GameController extends UniverseController {
	public function index() {
		return \View::make('Universe::Game.Index')
			->with('games', \App::make('\Universe\Repositories\GameRepository')->findAll());
	}

	public function create() {
		$game = \App::make('\Universe\Models\Game');
		$game->store();

		return \Redirect::route('universe.index');
	}
}