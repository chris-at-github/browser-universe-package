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

	public function play(\Illuminate\Http\Request $request, $id) {
		$request->session()->put('game.id', $id);

		$game = \App::make('\Universe\Repositories\GameRepository')->findBy([
			'id' => $id
		]);

		return \View::make('Universe::Game.Play')
			->with('game', $game);
	}
}