<?php

namespace Drsoft\Theme;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        require __DIR__.'/routes/routes.php';
       $this->loadViewsFrom(__DIR__.'\\Views\\','theme');
        $this->publishes([__DIR__.'/config/theme.php'=>config_path('theme.php')],'config');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
      /*  $this->app['theme']=$this->app->share(function($app){
            return new theme;
        });*/
        $this->app->bind('drsoft-theme',function(){
            return new Theme();
        });
    }
}
