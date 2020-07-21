<?php

namespace Godruoyi\LaravelTablerUi;

use Laravel\Ui\UiCommand;
use Illuminate\Support\ServiceProvider;

class TablerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            Tabler::expandCommandMacro();

            $this->commands([
                AuthCommand::class,
            ]);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
