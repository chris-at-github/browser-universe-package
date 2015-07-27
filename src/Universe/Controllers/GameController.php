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

	public function playground(\Illuminate\Http\Request $request, $id) {
		$request->session()->put('game.id', $id);

		$active	= $request->session()->get('active', []);
		$game 	= \App::make('\Universe\Repositories\GameRepository')->findBy([
			'id' => $id
		]);

		$planets = null;
		if(isset($active['planets']) === true && empty($active['planets']) === false) {
			$planets = \App::make('\Universe\Repositories\PlanetRepository')->findAllBy([
				'id' => $active['planets']
			]);
		}


		return \View::make('Universe::Game.Playground')
			->with('game', $game)
			->with('planets', $planets);
	}
}