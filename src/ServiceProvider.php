<?php
/**
 * Created by PhpStorm.
 * User: Buğra Güney
 * Date: 04.11.2018
 * Time: 00:25
 */

namespace bugraguney\laraveltr;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use bugraguney\laraveltr\Commands\InstallLang;

class ServiceProvider extends BaseServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('/lang'),
        ], 'lang');
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallLang::class,
            ]);
        }
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}