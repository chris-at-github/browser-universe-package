<?php namespace Universe\Providers;

use Illuminate\Support\ServiceProvider;

class TranslationServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot() {
		$this->loadTranslationsFrom(__DIR__ . '/../Lang', 'universe');
	}

//	/**
//	 * Register the service provider.
//	 *
//	 * @return void
//	 */
//	public function register() {
//	}
//
//	/**
//	 * Get the services provided by the provider.
//	 *
//	 * @return array
//	 */
//	public function provides() {
//		return array();
//	}
}