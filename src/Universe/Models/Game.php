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
}