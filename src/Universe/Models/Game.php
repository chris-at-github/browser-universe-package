<?php namespace Universe\Models;

/**
 * Class Game
 * @package Universe\Models
 */
class Game extends Universe {

	/**
	 * database table
	 *
	 * @var string
	 */
	protected $table = 'games';

	/**
	 * returns the map object that assign to the game
	 *
	 * @param string HID from the map
	 * @return \Universe\Models\Maps
	 */
	public function getMapAttribute($hid) {
		return \App::make('\Universe\Repositories\MapsRepository')->findBy([
			'hid'	=> $hid
		]);
	}

	/**
	 * returns the planet collection that assign to the game
	 *
	 * @param array HID of the planets
	 * @return \Illuminate\Support\Collection
	 */
	public function getPlanetsAttribute($hid) {
		$active = \Illuminate\Support\Collection::make(session()->get('active.planets', []));
		$planets = \App::make('\Universe\Repositories\PlanetRepository')->findAllBy([
			'hid' => $hid
		]);

		$planets->transform(function ($item) use ($active) {
			if($active->contains($item->id) === true) {
				$item->active = true;
			}

			return $item;
		});

		return $planets;
	}

	/**
	 * returns the ship collection that assign to the game
	 *
	 * @param array HID of the ships
	 * @return \Illuminate\Support\Collection
	 */
	public function getShipsAttribute($hid) {
		$active = \Illuminate\Support\Collection::make(session()->get('active.ships', []));
		$ships	= \App::make('\Universe\Repositories\ShipRepository')->findAllBy([
			'hid' => $hid
		]);

		$ships->transform(function ($item) use ($active) {
			if($active->contains($item->id) === true) {
				$item->active = true;
			}

			return $item;
		});

		return $ships;
	}
}