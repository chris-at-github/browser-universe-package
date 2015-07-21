<?php namespace Universe\Repositories;

class UniverseRepository {

	/**
	 * model for this repository
	 *
	 * @var \Illuminate\Database\Eloquent\Model $model
	 */
	protected $model;

	/**
	 * sample data collection for this repository
	 *
	 * @var \Illuminate\Support\Collection $collection
	 */
	protected $collection;

	/**
	 * constructor for UniverseRepository
	 *
	 * @param \Illuminate\Database\Eloquent\Model $model
	 */
	public function __construct($model = null) {
		if($model !== null) {
			$this->model = $model;
		}

		if(($this->collection instanceof \Illuminate\Support\Collection) === false) {
			$this->collection = \Illuminate\Support\Collection::make();
		}
	}

	/**
	 * getter for model property
	 *
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	protected function model() {
		return $this->model;
	}

	/**
	 * find one model
	 *
	 * @param int $id
	 * @param  array $columns
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	public function find($id, $columns = ['*']) {
		return $this->model->find($id, $columns);
	}

	/**
	 * find one model
	 *
	 * @param array $options
	 * @param  array $columns
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	public function findBy($options = [], $columns = ['*']) {
		$model = $this->model();

		if(isset($options['id']) === true) {
			$model->where('id', '=', $options['id']);
		}

		return $model->take(1)->get();
	}

	/**
	 * Get all of the models from the database
	 *
	 * @param array $columns
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	public function findAll($columns = ['*']) {
		return $this->model->all();
	}

	/**
	 * Get all of the models from the database
	 *
	 * @param array $options
	 * @param array $columns
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	public function findAllBy($options = [], $columns = ['*']) {
		$model = $this->model();

		if(isset($options['id']) === true) {
			if(gettype($options['id']) !== 'array') {
				$options['id'] = [$options['id']];
			}

			$model->whereIn('id', $options['id']);
		}

		return $model->get();
	}
}