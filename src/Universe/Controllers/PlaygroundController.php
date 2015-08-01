<?php namespace Universe\Controllers;

class PlaygroundController extends UniverseController {
	public function dragable() {
		return \View::make('Universe::Playground.Dragable');
	}
}