<?php namespace Universe\Controllers;

class GameController extends UniverseController {
	public function index() {
		return \View::make('Universe::Game.Index')
			->with('game', null);
	}

	public function create() {
		dd('Game\Create');
	}
}