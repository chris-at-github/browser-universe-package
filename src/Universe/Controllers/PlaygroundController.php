<?php namespace Universe\Controllers;

class PlaygroundController extends UniverseController {
	public function dragable() {
		return \View::make('Universe::Playground.Dragable');
	}

	public function snap() {
		return \View::make('Universe::Playground.Snap');
	}
}