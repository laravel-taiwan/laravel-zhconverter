<?php

namespace Seta0909\LaravelZhconverter;

use Illuminate\Support\ServiceProvider;

class LaravelZhconverterServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(LaravelZhconverter::class, function () {
            return new LaravelZhconverter();
        });
    }
}
