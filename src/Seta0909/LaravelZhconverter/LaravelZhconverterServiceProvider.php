<?php namespace Seta0909\LaravelZhconverter;

use Illuminate\Support\ServiceProvider;

class LaravelZhconverterServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('seta0909/laravel-zhconverter');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['ZhConvert'] = $this->app->share(function ($app) {
            return new LaravelZhconverter;
        });
        $this->app->booting(function () {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('ZhConvert', 'Seta0909\LaravelZhconverter\Facades\LaravelZhconverter');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('ZhConvert');
    }

}
