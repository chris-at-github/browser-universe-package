<?php namespace Universe\Models;

/**
 * Class Planet
 * @package Universe\Models
 */
class Planet extends Universe {

	/**
	 * database table
	 *
	 * @var string
	 */
	protected $table = 'planets';

	/**
	 * returns the action collection that assign to this model
	 *
	 * @return \Illuminate\Support\Collection
	 */
	public function getActionsAttribute() {
		$action = \App::make('\Universe\Models\Action');
		$action->fill([
			'name'  => \Lang::get('universe::planet.action.settle'),
			'route' => route('planet.settle', ['id' => $this->id])
		]);
		$this->actions->put('ACTION_SETTLE', $action);

		return parent::getActionsAttribute();
	}
}