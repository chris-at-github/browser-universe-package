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
	 * Calculate the width in pixel
	 *
	 * @return int
	 */
	public function getCalculatedWidth() {
//		\Config::get('universe.map.gutter')
		return 100;
	}

	/**
	 * Calculate the height in pixel
	 *
	 * @return int
	 */
	public function getCalculatedHeight() {
		return 100;
	}
}