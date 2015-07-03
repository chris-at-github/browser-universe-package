<?php namespace Universe\Controllers;

class MapsController extends UniverseController {
	public function index() {
		return \View::make('Universe::Maps.Index');
	}
}