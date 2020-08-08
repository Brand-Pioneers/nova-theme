<?php

namespace BrandPioneers\NovaTheme;

use Laravel\Nova\Nova;
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
        Nova::theme(asset('/brandpioneers/nova-theme/theme.css'));

        $this->publishes([
            __DIR__.'/../resources/css'   => public_path('brandpioneers/nova-theme'),
            __DIR__.'/../resources/fonts' => public_path('brandpioneers/nova-theme/fonts'),
        ], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
