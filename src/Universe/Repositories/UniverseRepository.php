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
	 * @var \Illuminate\Support\Collection $fixtures
	 */
	protected $fixtures;

	/**
	 * constructor for UniverseRepository
	 *
	 * @param \Illuminate\Database\Eloquent\Model $model
	 */
	public function __construct($model = null) {
		if($model !== null) {
			$this->model = $model;
		}

		if(($this->fixtures instanceof \Illuminate\Support\Collection) === false) {
			$this->fixtures = \Illuminate\Support\Collection::make();
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
		$model = null;

		if(isset($options['id']) === true) {
			$model = $this->fixtures->where('id', (int)$options['id'])->first();
		}

		if(isset($options['hid']) === true && $this->fixtures->has($options['hid']) === true) {
			$model = $this->fixtures->get($options['hid']);
		}

		return $model;

//		$model = $this->model();
//
//		if(isset($options['id']) === true) {
//			$model->where('id', '=', $options['id']);
//		}
//
//		return $model->take(1)->get();
	}

	/**
	 * Get all of the models from the database
	 *
	 * @param array $columns
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	public function findAll($columns = ['*']) {
		return $this->fixtures;
//		return $this->model->all();
	}

	/**
	 * Get all of the models from the database
	 *
	 * @param array $options
	 * @param array $columns
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	public function findAllBy($options = [], $columns = ['*']) {
		$collection = \Illuminate\Support\Collection::make();

		if(isset($options['hid']) === true) {
			$this->fixtures->map(function($item, $key) use ($collection, $options) {
				if(in_array($key, $options['hid']) === true) {
					$collection->put($key, $item);
				}
			});
		}

		if(isset($options['id']) === true) {
			$this->fixtures->map(function ($item, $key) use ($collection, $options) {
				if(in_array($item->id, $options['id']) === true) {
						$collection->put($key, $item);
				}
			});
		}

		return $collection;

//		$model = $this->model();
//
//		if(isset($options['id']) === true) {
//			if(gettype($options['id']) !== 'array') {
//				$options['id'] = [$options['id']];
//			}
//
//			$model->whereIn('id', $options['id']);
//		}
//
//		return $model->get();
	}
}