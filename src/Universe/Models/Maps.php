<?php namespace Universe\Models;

/**
 * Class Map
 * @package Universe\Models
 */
class Maps extends Universe {

	/**
	 * database table
	 *
	 * @var string
	 */
	protected $table = 'maps';

	/**
	 * returns the planet collection that assign to the map
	 *
	 * @param array HID of the planets
	 * @return \Illuminate\Support\Collection
	 */
	public function getPlanetsAttribute($hid) {
		return \App::make('\Universe\Repositories\PlanetRepository')->findAllBy([
			'hid' => $hid
		]);
	}
}