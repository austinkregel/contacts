<?php namespace Kregel\Contacts;

use Illuminate\Support\ServiceProvider;

class ContactsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}


	/**
	 *
	 */
	public function boot(){
		if (!$this->app->routesAreCached()) {
			$this->app->router->group(['namespace' => 'Kregel\Contracts\Http\Controllers'], function ($router) {
				require __DIR__.'/Http/routes.php';
			});
		}

		$this->loadViewsFrom(__DIR__.'/../resources/views', 'contacts');
		$this->publishes([
			__DIR__.'/../resources/views' => base_path('resources/views/vendor/contacts'),
		], 'views');
		$this->publishes([
			__DIR__.'/../config/config.php' => config_path('kregel/contacts.php'),
		], 'config');

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
