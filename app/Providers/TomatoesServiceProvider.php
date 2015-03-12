<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Guzzle\Service\Client;

class TomatoesServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('tomatoes', function()
        {
            $client = new Client('http://api.rottentomatoes.com/api/public/v1.0/');

            return new \App\TomatoAPI($client);
        });
	}

}
