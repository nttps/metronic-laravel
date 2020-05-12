<?php

namespace Nttps\MetronicTheme;

use Nttps\MetronicTheme\Theme\Init;
use Illuminate\Support\ServiceProvider;

class MetronicServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/layout.php', 'layout');
        $this->mergeConfigFrom(__DIR__.'/../config/menu_aside.php', 'menu_aside');
        $this->mergeConfigFrom(__DIR__.'/../config/menu_header.php', 'menu_header');

        $this->app->make('Nttps\MetronicTheme\Http\Controllers\PagesController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Init::run();
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'metronic');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/metronic'),
        ] , 'metronic_view');
        $this->loadRoutesFrom(__DIR__.'/../routes/metronic.php');

        $this->publishes([
            __DIR__.'/../config/layout.php' => config_path('layout.php'),
            __DIR__.'/../config/menu_aside.php' => config_path('menu_aside.php'),
            __DIR__.'/../config/menu_header.php' => config_path('menu_header.php'),
        ], 'metronic_config');

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/metronic'),
        ], 'metronic_public');

    }
}
