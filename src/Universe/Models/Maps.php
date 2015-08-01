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
		return \Config::get('universe.map.gutter') * $this->width;
	}

	/**
	 * Calculate the height in pixel
	 *
	 * @return int
	 */
	public function getCalculatedHeight() {
		return \Config::get('universe.map.gutter') * $this->height;
	}
}