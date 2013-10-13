<?php namespace Taqmaninw\Seostat;

use Illuminate\Support\ServiceProvider;

class SeostatServiceProvider extends ServiceProvider {

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
		    $this->app['seostat'] = $this->app->share(function($app) {

                    return new SEOstats;
                });
	}
       public function boot() 
    {
        $this->package('taqmaninw/seostat');
       
    } 

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}