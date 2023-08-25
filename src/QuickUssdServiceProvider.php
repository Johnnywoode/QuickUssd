<?php

namespace johnnywoode\quickussd;

use Illuminate\Support\ServiceProvider;

class QuickUssdServiceProvider extends ServiceProvider
{
	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
	 */
	protected $commands = [
		'johnnywoode\quickussd\Console\Commands\Install',
	];



	public function boot()
	{
		$this->app->router->group(
			['namespace' => 'johnnywoode\quickussd\Http\Controllers'],
			function () {
				require __DIR__ . '/Http/routes.php';
			}
		);
		$this->loadViewsFrom(__DIR__ . '/resources/views', 'courier');
		$this->publishes([
			__DIR__ . '/Http/migrations/' => database_path('/migrations')
		], 'migrations');
		$this->publishes([
			__DIR__ . '/Http/seeds/' => database_path('/seeds')
		], 'seeds');
		$this->publishes([
			__DIR__ . '/Http/Controllers/' => database_path('../app/Http/Controllers')
		], 'Controllers');
		$this->publishes([
			__DIR__ . '/Http/models/' => database_path('../app/')
		], 'Models');
	}

	/**
	 * Register any package services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
		$this->commands($this->commands);
	}
}
